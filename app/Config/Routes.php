<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Routes that DO NOT require login
    $routes->get('/', 'Main::index');
$routes->get('login', 'Auth::login');
$routes->post('auth/attemptLogin', 'Auth::attemptLogin');

// Routes that REQUIRE login
$routes->group('', ['filter' => 'auth'], function($routes) {
        $routes->get('admin/dashboard', 'Home::index');
        
        
        $routes->get('admin/produk', 'AdminProduct::index');
        $routes->get('admin/produk/add', 'AdminProduct::add');
        $routes->get('admin/produk/edit/(:num)', 'AdminProduct::edit/$1');
        $routes->post('admin/produk/save', 'AdminProduct::save');
        $routes->get('admin/produk/delete/(:num)', 'AdminProduct::delete/$1');

        $routes->get('admin/user', 'AdminUser::index');
        $routes->get('admin/user/add', 'AdminUser::add');
        $routes->get('admin/user/edit/(:num)', 'AdminUser::edit/$1');
        $routes->post('admin/user/save', 'AdminUser::save');
        $routes->get('admin/user/delete/(:num)', 'AdminUser::delete/$1');

        $routes->get('admin/journal', 'AdminJournal::index');
        $routes->get('admin/pesanan', 'AdminOrder::index');
        $routes->get('admin/inventory', 'AdminInventory::index');

        
        
    $routes->get('profile', 'User::profile');
    $routes->get('logout', 'Auth::logout');
});