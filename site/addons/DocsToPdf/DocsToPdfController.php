<?php

namespace Statamic\Addons\DocsToPdf;

use Statamic\Extend\Controller;

class DocsToPdfController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {
        return $this->view('index');
    }
}
