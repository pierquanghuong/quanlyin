<?php

$routes->group(
    'product', ['namespace' => 'App\Modules\Product\Controllers'], function ($routes) {
        $routes->get('/', 'Index::index');
    }
);