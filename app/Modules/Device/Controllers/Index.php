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
        $this->data['page_header'] = 'Quản Lý Thiết Bị';
        return self::render('device/index');
    }

    public function create()
    {
        $this->data['page_title'] = 'Quản Lý Thiết Bị';
        $this->data['page_header'] = 'Thêm Thiết Bị Mới';
        return self::render('device/create');
    }

    public function edit($device_id)
    {
        $device_id = 1;
        $device['name'] = 'Ricoh MP 6002';
        $this->data['page_title'] = 'Quản Lý Thiết Bị';
        $this->data['page_header'] = 'Thông tin máy: ' . $device['name'];
        return self::render('device/edit');
    }

    public function general($device_id)
    {
        $device_id = 1;
        $device['name'] = 'Ricoh MP 6002';
        $this->data['page_title'] = 'Quản Lý Thiết Bị';
        $this->data['page_header'] = 'Sửa thông tin máy: ' . $device['name'];
        return self::render('device/general-info');
    }

    public function report()
    {
        $this->data['page_title'] = 'Quản Lý Thiết Bị';
        $this->data['page_header'] = 'Báo cáo thiết bị';
        return self::render('device/report');
    }

    /**
     * Render view
     *
     * @param string $page
     * @return string
     */
    public function render(string $page): string
    {
        return view( $this->folder_directory . $page, $this->data);
    }
}