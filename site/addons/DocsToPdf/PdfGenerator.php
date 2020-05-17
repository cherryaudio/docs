<?php

namespace Statamic\Addons\DocsToPdf;

use Statamic\API\File;
use Statamic\API\Folder;
use Statamic\API\Page;
use Statamic\API\YAML;
use Statamic\Addons\DocsToPdf\Toc;
use Statamic\Extend\Extensible;

class PdfGenerator
{
    use Extensible;

    public function create($pages, $name, $theme)
    {
        $paths = collect($pages)->map(function ($id) {
            return str_replace('/index.md', '', Page::find($id)->path());
        });

        $this->content = '';

        foreach ($paths as $path) {
            $this->forEachFile($path);
        }

        $toc = new TOC($this->content);
        $html = str_replace("\n", '', $this->view('pdf', ['toc' => $toc, 'theme' => $theme, 'name' => $name])->render());

        return $html;
    }

    private function forEachFile($path)
    {
        foreach (Folder::disk('content')->getFiles($path) as $file) {
            $this->processFile($file);

            $directories = Folder::disk('content')->getFolders($path);
            natsort($directories);

            foreach ($directories as $directory) {
                $this->forEachFile($directory);
            }
        }
    }

    private function processFile($path)
    {
        $file = File::disk('content')->get($path);
        $data = Yaml::parse($file);

        if (isset($data['body'])) {
            $this->content .= $this->bardToHtml($data['body']);
        }
    }

    private function bardToHtml($bard)
    {
        $content = '';

        foreach ($bard as $item) {
            if ($item['type'] === 'image') {
                $content .= $this->processImage($item);
            } elseif ($item['type'] === 'text') {
                $content .= $this->processHtml($item);
            } elseif ($item['type'] === 'video') {
                $content .= $this->processVideo($item);
            } elseif ($item['type'] === 'buttons') {
                $content .= $this->processButtons($item);
            }
        }

        return $content;
    }

    private function processImage($item)
    {
        $fileName = substr($item['image'][0], strrpos($item['image'][0], '/', -1) + 1); // remove path
        if ($fileName !== 'ug_intro_cherryiconlogogr_sm.jpg' && $fileName !== 'ug_intro_voltagelogo_gry.jpg') {
            $fileName = substr($fileName, 0, strlen($fileName) - 4); // remove extension

            return "<p><img alt='{$item['image'][0]}' src='https://docs.cherryaudio.com{$item['image'][0]}'></p>";
        } else {
            return '';
        }
    }

    private function processHtml($item)
    {
        $text = $item['text'];
        $text = str_replace(['<strike>', '</strike>'], '', $text);

        if (strpos($item['text'], '</a>')) {

            $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
            if (preg_match_all("/$regexp/siU", $text, $matches, PREG_SET_ORDER)) {

                foreach ($matches as $match) {
                    $parts = explode('/', $match[2]);
                    $newHref = end($parts);

                    if (!starts_with($newHref, '#')) {
                        $newHref = '#' . $newHref;
                    }

                    $newLink = str_replace($match[2], $newHref, $match[0]);

                    $text = str_replace($match[0], $newLink, $text);
                }
            }

            return $text;
        }

        return $text;
    }

    private function processVideo($item)
    {
        $parts = explode('/', $item['video']);

        if (strpos($item['video'], '/', -1) === false) {
            $id = $parts[count($parts) - 1];
        } else {
            $parts = explode('/', $item['video']);
            $id = $parts[count($parts) - 2];
        }

        $content = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/videos?key=AIzaSyDuWFmWkrHy4781jqyXwEVQIs6UPFxIXFo&part=snippet&id={$id}", true));
        $url = $content->items[0]->snippet->thumbnails->standard->url;

        return "<p><a href='{$item['video']}'><img alt='Video' src='{$url}'></a></p>";
    }

    private function processButtons($item)
    {
        $buttons = '<p>';

        foreach ($item['buttons'] as $button) {
            $url = explode('/', $button['url'])[count(explode('/', $button['url'])) - 1];
            $buttons .= "<a href='#{$url}' class='{$button['color']}'>{$button['link_text']}</a>";
        }

        return $buttons . '</p>';
    }
}
