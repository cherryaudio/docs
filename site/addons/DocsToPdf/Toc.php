<?php

namespace Statamic\Addons\DocsToPdf;

class Toc
{
    public $ids = [];
    public $contentHtml;
    public $headings;
    public $listHtml = '';

    public function __construct($content)
    {
        $this->contentHtml = $this->cleanContent($content);
        $this->headings = $this->extractHeadings($this->contentHtml);
        $this->contentHtml = $this->addPageBreaksToH1s($this->headings);
        $this->generate($this->headings);
    }

    public function getContent()
    {
        return $this->contentHtml;
    }

    public function getToc()
    {
        return $this->listHtml;
    }

    private function addIdToHeading($id, $text)
    {
        /** The regular expression used to search for headings. The special regex characters are removed from the text */
        $regex = "/<h(\d)( class=.+)?>" . preg_quote($text, "/") . "<\/h\d>/U";

        /** The replacement expression */
        $replacement = "<h$1 $2 id='" . $id . "'>" . $text . "</h$1>";

        /** The text is replaced within the article text */
        $this->contentHtml = preg_replace($regex, $replacement, $this->contentHtml);
    }

    private function addLinkToToc($link, $subHeadings)
    {
        /** The heading text is enclosed in <li> tags */
        $this->listHtml .= "<li>" . $link;
        /** If the sub headings are present */
        if (count(array_keys($subHeadings)) > 0) {
            /** The toc is generated from sub headings */
            $this->listHtml .= $this->generate($subHeadings);
        }
        /** The <li> tag is closed */
        $this->listHtml .= "</li>";
    }

    private function addPageBreaksToH1s($headings)
    {
        /** The updated article text */
        $updated_article_text = $this->contentHtml;

        foreach ($headings as $heading => $values) {
            $updated_article_text = str_replace($heading, '<div style="page-break-after: always;"></div>' . $heading, $updated_article_text);
        }

        return $updated_article_text;
    }

    private function cleanContent($content)
    {
        return str_replace(["\n", "\r"], '', $content);
    }

    private function extractHeadings($article_text, $level = 1)
    {
        /** The new lines are removed from the text */
        $text = $article_text;

        /** The header tag */
        $tag = "h" . $level;
        /** The required heading list */
        $heading_list = [];
        /** The tag is extracted from the article text */
        preg_match_all("/<" . $tag . ".*>(.+)<\/" . $tag . ">/iU", $text, $matches1);
        /** If no matches were found */
        if (count($matches1[0]) == 0 && $level < 6) {
            /** The headings for the next level are extracted */
            $heading_list = $this->extractHeadings($text, ($level + 1));
        }

        /** The text after each heading is extracted */
        for ($count = 0; $count < count($matches1[0]); $count++) {
            /** The extracted heading */
            $htext = $matches1[0][$count];
            /** The next heading */
            $next_heading = (isset($matches1[0][$count + 1])) ? $matches1[0][$count + 1] : "";
            /** The regular expression special characters are quoted */
            $text1 = preg_quote($htext, "/");
            /** The regular expression special characters are quoted */
            $text2 = preg_quote($next_heading, "/");
            /** The regular expression for extracting the text between two headings */
            $regex = "/" . $text1 . "(.+)" . $text2 . "/iU";
            /** The text between two headings is extracted */
            preg_match_all($regex, $text, $matches2);
            /** The next article text to check */
            $next_text = $matches2[1][0];
            /** The list of sub headings */
            $sub_heading_list = [];
            /** The sub heading level to check */
            $next_level = $level;
            /** The sub headings are extracted */
            do {
                /** The next heading level is checked */
                $next_level++;
                /** The next level headings are extracted */
                $sub_heading_list = $this->extractHeadings($next_text, $next_level);
            } while (count($sub_heading_list) == 0 && $next_level < 6);
            /** The sub heading list is added to the main heading */
            $heading_list[$htext] = $sub_heading_list;
        }

        return $heading_list;
    }

    private function generate($headings)
    {
        $this->listHtml .= '<ul>';

        foreach ($headings as $text => $subHeadings) {
            $level = substr($text, 2, 1);
            $text = strip_tags($text);
            $id = $this->getValidId($text, $level);
            $link = $this->getLink($id, $text);

            $this->addLinkToToc($link, $subHeadings);
            $this->addIdToHeading($id, $text);
        }

        $this->listHtml .= '</ul>';
    }

    private function getLink($id, $text)
    {
        return "<a href='#" . $id . "'>" . $text . "</a>";
    }

    private function getValidId($text)
    {
        $id = str_replace(["|", " ", ","], "-", htmlspecialchars(strtolower($text), ENT_QUOTES));
        $id = str_replace(['/', "[", "]", "%", "'", "’"], '', $id);
        $id = str_replace(['--'], '-', $id);

        $added = false;
        $number = 0;

        while ($added === false) {
            if ($number > 0) {
                $string = $id . $number;
            } else {
                $string = $id;
            }

            if (in_array($string, $this->ids)) {
                $number++;
            } else {
                $this->ids[] = $string;
                $added = true;
            }
        }

        return $string;
    }
}
