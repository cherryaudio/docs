<?php

namespace App\Tags;

use Illuminate\Support\Str;
use Statamic\Tags\Collection\Entries;
use Statamic\Tags\Tags;

class Categories extends Tags
{
    protected static $handle = 'nav-categories';

    public function index()
    {
        $entries = new Entries($this->parameters);
        return $entries->get()
            ->map(function ($item) {
                return [
                    'categories' => $item->categories,
                    'title' => $item->title,
                    'url' => $item->url(),
                ];
            })
            ->groupBy('categories')
            ->map(function ($item, $key) {
                return [
                    'key' => $key,
                    'group' => $this->getGroupLabel($key),
                    'group_active' => Str::contains(url()->current(), '/'.$key),
                    'children' => $item,
                ];
            })
            ->sortBy('key')
            ->values()
            ->toArray();
    }

    private function getGroupLabel($key)
    {
        if ($key === 'cv-processors') {
            return 'CV Processors';
        } elseif ($key === 'io') {
            return 'I/O';
        } elseif ($key === 'midi') {
            return 'MIDI';
        }
        return title_case(str_replace('-', ' ', $key));
    }
}
