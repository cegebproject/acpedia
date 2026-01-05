<?php

namespace App\Controllers;

class AdminProduct extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\ProductModel();
        $products = $model->getProductDetails();

        $data = [
            'title' => 'Product List | ACPedia',
            'products' => $products,
        ];

        return view('admin_product_list', $data);
    }
    
     public function add(): string
    {
        $data = [
            'title' => 'Add New Product | ACPedia'
        ];
        return view('admin_product_add');
    }
}
