<?php

namespace Statamic\Addons\DocsToPdf;

use Statamic\API\Nav;
use Statamic\Extend\Listener;

class DocsToPdfListener extends Listener
{

    public $events = [
        'cp.nav.created' => 'addNavItems',
    ];

    public function addNavItems($nav)
    {
        $docsToPdf = Nav::item('docs-to-pdf')
            ->title('Docs to Pdf')
            ->route('docsToPdf.dashboard')
            ->icon('magnifying-glass');

        $nav->addTo('tools', $docsToPdf);
    }
}
