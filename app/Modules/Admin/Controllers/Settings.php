<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Settings extends BaseController
{
    protected $folder_directory = "Modules\\Admin\\Views\\";
    protected $model;
    protected $data = [];
    protected $rules = [];

    public function __construct()
    {
    }

    public function index()
    {
        if(!user_id()) {
            return redirect()->route('login');
        }
        $this->data['page_title'] = 'Admin - Cấu hình hệ thống';
        $this->data['page_header'] = 'Cấu hình';
        $this->data['contents'] = [
            $this->folder_directory . 'settings',
        ];
        return self::render();
    }

    public function render(): string
    {
        return view( HMVCSHIELDVIEWS . 'index', $this->data);
    }
}