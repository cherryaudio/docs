<?php

namespace App\Tags;

use Illuminate\Support\Str;
use Statamic\Tags\Collection\Entries;
use Statamic\Tags\Tags;

class CollectionNav extends Tags
{
    protected static $handle = 'collection-nav';

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
                ;
                return [
                    'group' => title_case(str_replace('-', ' ', $key)),
                    'group_active' => Str::contains(url()->current(), $key),
                    'children' => $item,
                ];
            })
            ->sortBy('group')
            ->values()
            ->toArray();
    }
}
