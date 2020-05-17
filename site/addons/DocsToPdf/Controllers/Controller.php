<?php

namespace Statamic\Addons\DocsToPdf\Controllers;

use Statamic\CP\Publish\ProcessesFields;
use Statamic\CP\Publish\PreloadsSuggestions;

abstract class Controller extends \Statamic\Extend\Controller
{
    use ProcessesFields;
    use PreloadsSuggestions;
}
