<?php

namespace App\Tags;

use Illuminate\Support\Str;
use Statamic\Entries\Collection;
use Statamic\Entries\Entry;
use Statamic\Tags\Tags;

class DocsNav extends Tags
{
    protected static $handle = 'docs-nav';

    public function index()
    {
        if (is_string($this->parameters['from'])) {
            $data = (new Collection)->handle($this->parameters['from']);
            dd($data);
        } else {
            $data = $this->parameters['from']->structureContents()['tree'];
            dd($this->parameters['from']);
        }
        return $this->buildFromEntryIds($data);
    }

    private function buildFromEntryIds($entries)
    {
        return collect($entries)->map(function ($id, $key) {
            $entry = Entry::find($id['entry']);
            if (isset($id['children'])) {
                if ($entry->title === 'Module Controls') {
                    dd($entry->url(), url()->current(), Str::contains(url()->current(), $entry->url()));
                }
                return [
                    'title' => $entry->title,
                    'url' => $entry->url(),
                    'active' => Str::contains(url()->current(), $entry->url()),
                    'children' => $this->buildFromEntryIds($id['children']),
                ];
            } else {
                return [
                    'title' => $entry->title,
                    'url' => $entry->url(),
                    'active' => Str::contains(url()->current(), $entry->url())
                ];
            }
        });
    }
}
