<?php

$routes->group(
    'admin', ['namespace' => 'App\Modules\Admin\Controllers'], function ($routes) {
        $routes->get('/', 'Index::index');
        $routes->get('setting', 'Settings::index');
    }
);