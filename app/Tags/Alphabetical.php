<?php

namespace App\Tags;

use Illuminate\Support\Str;
use Statamic\Tags\Collection\Entries;
use Statamic\Tags\Tags;

class Alphabetical extends Tags
{
    protected static $handle = 'nav-alphabetical';

    public function index()
    {
        $entries = new Entries($this->parameters);
        return $entries->get()
            ->map(function ($item) {
                return [
                    'letter' => strtolower($item->title[0]),
                    'title' => $item->title,
                    'slug' => $item->slug(),
                    'url' => $item->url(),
                ];
            })
            ->groupBy('letter')
            ->map(function ($items, $key) {
                return [
                    'key' => $key,
                    'group' => strtoupper($key),
                    'group_active' => $items->contains('slug', Str::afterLast(url()->current(), '/')),
                    'children' => $items,
                ];
            })
            ->sortBy('key')
            ->values()
            ->toArray();
    }
}
