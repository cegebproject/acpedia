<?php

namespace App\Controllers;

class AdminProduct extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Product List | ACPedia'
        ];
        return view('admin_product_list');
    }
    
     public function add(): string
    {
        $data = [
            'title' => 'Add New Product | ACPedia'
        ];
        return view('admin_product_add');
    }
}
