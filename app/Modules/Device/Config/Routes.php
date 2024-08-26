<?php

$routes->group(
    'device', ['namespace' => 'App\Modules\Device\Controllers'], function ($routes) {
        $routes->get('/', 'Index::index');
        $routes->get('create', 'Index::create');
    }
);