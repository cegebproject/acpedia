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

        $routes->get('admin/master', 'AdminMasterData::index');
        $routes->get('admin/master/brands', 'AdminMasterData::brands');
        $routes->get('admin/master/brands/add', 'AdminMasterData::brandsAdd');
        $routes->get('admin/master/brands/edit/(:num)', 'AdminMasterData::brandsEdit/$1');
        $routes->post('admin/master/brands/save', 'AdminMasterData::brandsSave');
        $routes->get('admin/master/brands/delete/(:num)', 'AdminMasterData::brandsDelete/$1');

        $routes->get('admin/master/categories', 'AdminMasterData::categories');
        $routes->get('admin/master/categories/add', 'AdminMasterData::categoriesAdd');
        $routes->get('admin/master/categories/edit/(:num)', 'AdminMasterData::categoriesEdit/$1');
        $routes->post('admin/master/categories/save', 'AdminMasterData::categoriesSave');
        $routes->get('admin/master/categories/delete/(:num)', 'AdminMasterData::categoriesDelete/$1');

        $routes->get('admin/master/pklist', 'AdminMasterData::pklist');
        $routes->get('admin/master/pklist/add', 'AdminMasterData::pklistAdd');
        $routes->get('admin/master/pklist/edit/(:num)', 'AdminMasterData::pklistEdit/$1');
        $routes->post('admin/master/pklist/save', 'AdminMasterData::pklistSave');
        $routes->get('admin/master/pklist/delete/(:num)', 'AdminMasterData::pklistDelete/$1');

        $routes->get('admin/master/actypes', 'AdminMasterData::actypes');
        $routes->get('admin/master/actypes/add', 'AdminMasterData::actypesAdd');
        $routes->get('admin/master/actypes/edit/(:num)', 'AdminMasterData::actypesEdit/$1');
        $routes->post('admin/master/actypes/save', 'AdminMasterData::actypesSave');
        $routes->get('admin/master/actypes/delete/(:num)', 'AdminMasterData::actypesDelete/$1');

        $routes->get('admin/journal', 'AdminJournal::index');
        $routes->get('admin/pesanan', 'AdminOrder::index');
        $routes->get('admin/inventory', 'AdminInventory::index');

        
        
    $routes->get('profile', 'User::profile');
    $routes->get('logout', 'Auth::logout');
});