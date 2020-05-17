<?php

namespace Statamic\Addons\DocsToPdf\Controllers;

use Statamic\API\Page;
use Statamic\Addons\DocsToPdf\PdfGenerator;

class DashboardController extends Controller
{
    public $content;

    public function index()
    {
        $pages = Page::all()
            ->filter(function ($page) {
                return $page->children()->count() > 0;
            })
            ->map(function ($page, $key) {
                $title = $page->get('title');

                if ($page->parent() && $page->parent()->get('title') !== 'Home') {
                    $title = $page->parent()->get('title') . ' > ' . $title;
                }

                return ['title' => $title, 'id' => $key];
            })
            ->pluck('title', 'id');

        $themes = [
            'github.css' => 'GitHub',
            'gothic.css' => 'Gothic',
            'newsprint.css' => 'Newsprint',
            'night.css' => 'Night',
            'pixyll.css' => 'Pixyll',
            'quartz-milky.css' => 'Quartz Light',
            'quartz-smoky.css' => 'Quartz Dark',
            'whitey.css' => 'Whitey',
        ];

        return $this->view('index', [
            'title' => 'Docs to PDF',
            'pages' => $pages,
            'themes' => $themes,
        ]);
    }

    public function store()
    {
        foreach (request('themes') as $theme) {
            return (new PdfGenerator)->create(request('pages'), request('name'), $theme);
        }
    }
}
