<?php

$routes->group(
    'device', ['namespace' => 'App\Modules\Device\Controllers'], function ($routes) {
        $routes->get('/', 'Index::index');
        $routes->get('create', 'Index::create');
        $routes->get('edit/(:num)', 'Index::edit/$1');
        $routes->get('general/(:num)', 'Index::general/$1');
        $routes->get('report', 'Index::report');
    }
);

$routes->group(
    'part', ['namespace' => 'App\Modules\Device\Controllers'], function ($routes) {
        $routes->get('/', 'Part::index');
        $routes->get('create', 'Part::create');
    }
);