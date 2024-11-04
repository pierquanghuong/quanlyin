<?php

namespace App\Modules\Product\Controllers;

use App\Controllers\BaseController;

class Price extends BaseController
{
    protected $folder_directory = "Modules\\Product\\Views\\";
    protected $model;
    protected $data = [];
    protected $rules = [];

    public function __construct()
    {
    }

    public function index()
    {
        return self::render('index');
    }

    public function render(string $page): string
    {
        return view( $this->folder_directory . $page, $this->data);
    }
}