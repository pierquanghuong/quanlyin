<?php

namespace App\Modules\Device\Controllers;

use App\Controllers\BaseController;

class Part extends BaseController
{
    protected $folder_directory = "Modules\\Device\\Views\\";
    protected $model;
    protected $data = [];
    protected $rules = [];

    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'Quản Lý Linh Kiện';
        $data['page_header'] = 'Danh sách Linh Kiện - Vật Tư';
        return self::render('part/index');
    }

    public function create()
    {
        $data['page_title'] = 'Quản Lý Linh Kiện';
        $data['page_header'] = 'Danh sách Linh Kiện - Vật Tư';  
        return self::render('part/create');
    }

    public function render(string $page): string
    {
        return view( $this->folder_directory . $page, $this->data);
    }
}