<?php

namespace App\Modules\Device\Controllers;

use App\Controllers\BaseController;
use App\Modules\Device\Models\Device;

class Index extends BaseController
{
    protected $folder_directory = "Modules\\Device\\Views\\";
    protected $model;
    protected $data = [];
    protected $rules = [];

    public function __construct()
    {
        $this->model = new Device;
    }

    public function index()
    {
        $this->data['page_title'] = 'Quản Lý Thiết Bị';
        $this->data['page_header'] = 'Danh Sách Thiết Bị';
        return self::render('index');
    }

    public function render(string $page): string
    {
        return view( $this->folder_directory . $page, $this->data);
    }

    public function create()
    {
        $this->data['page_title'] = 'Quản Lý Thiết Bị';
        $this->data['page_header'] = 'Thêm Thiết Bị Mới';
        return self::render('create', $this->data);
    }
}