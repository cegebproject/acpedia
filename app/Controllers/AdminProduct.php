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
        $db = \Config\Database::connect();
        $brands = $db->table('brands')->get()->getResultArray();
        $categories = $db->table('categories')->get()->getResultArray();
        $ac_types = $db->table('ac_types')->get()->getResultArray();
        $pk_list = $db->table('pk_list')->get()->getResultArray();

        $data = [
            'title' => 'Add New Product | ACPedia',
            'brands' => $brands,
            'categories' => $categories,
            'ac_types' => $ac_types,
            'pk_list' => $pk_list,
            'product' => null
        ];
        return view('admin_product_add', $data);
    }

    public function edit($id): string
    {
        $model = new \App\Models\ProductModel();
        $product = $model->find($id);

        $db = \Config\Database::connect();
        $brands = $db->table('brands')->get()->getResultArray();
        $categories = $db->table('categories')->get()->getResultArray();
        $ac_types = $db->table('ac_types')->get()->getResultArray();
        $pk_list = $db->table('pk_list')->get()->getResultArray();

        $data = [
            'title' => 'Edit Product | ACPedia',
            'brands' => $brands,
            'categories' => $categories,
            'ac_types' => $ac_types,
            'pk_list' => $pk_list,
            'product' => $product
        ];
        return view('admin_product_add', $data);
    }

    public function save()
    {
        $model = new \App\Models\ProductModel();
        $data = $this->request->getPost();

        // Handle JSON fields
        if (isset($data['additional_image_urls']) && is_array($data['additional_image_urls'])) {
            $data['additional_image_urls'] = json_encode($data['additional_image_urls']);
        }
        if (isset($data['specifications']) && is_array($data['specifications'])) {
            $data['specifications'] = json_encode($data['specifications']);
        }

        $model->save($data);

        return redirect()->to('/admin/produk');
    }

    public function delete($id)
    {
        $model = new \App\Models\ProductModel();
        $model->delete($id);

        return redirect()->to('/admin/produk');
    }
}
