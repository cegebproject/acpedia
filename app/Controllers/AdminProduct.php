<?php

namespace App\Controllers;

class AdminProduct extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\ProductModel();

        $perPage = 15;
        $products = $model
            ->select('products.*, b.name AS brand_name, c.name AS category_name, ac.name AS ac_type_name, pk.name AS pk_name')
            ->join('brands b', 'b.id = products.brand_id', 'left')
            ->join('categories c', 'c.id = products.category_id', 'left')
            ->join('ac_types ac', 'ac.id = products.ac_type_id', 'left')
            ->join('pk_list pk', 'pk.id = products.pk_id', 'left')
            ->orderBy('products.created_at', 'DESC')
            ->paginate($perPage);

        $pager = $model->pager;

        $data = [
            'title' => 'Product List | ACPedia',
            'products' => $products,
            'pager' => $pager,
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
