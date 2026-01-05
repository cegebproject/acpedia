<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Toko extends Controller
{
    /**
     * Loads the Toko Kami page view.
     */
    public function index()
    {
        $model = new \App\Models\ProductModel();

        // Fetch active products with related data
        $products = $model
            ->select('products.*, b.name AS brand_name, c.name AS category_name, ac.name AS ac_type_name, pk.name AS pk_name')
            ->join('brands b', 'b.id = products.brand_id', 'left')
            ->join('categories c', 'c.id = products.category_id', 'left')
            ->join('ac_types ac', 'ac.id = products.ac_type_id', 'left')
            ->join('pk_list pk', 'pk.id = products.pk_id', 'left')
            ->where('products.is_active', 1)
            ->orderBy('products.created_at', 'DESC')
            ->findAll();

        // Also fetch brands, categories, ac_types for filters
        $db = \Config\Database::connect();
        $brands = $db->table('brands')->get()->getResultArray();
        $categories = $db->table('categories')->get()->getResultArray();
        $ac_types = $db->table('ac_types')->get()->getResultArray();

        $data = [
            'title' => 'Toko Kami | ACPedia',
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories,
            'ac_types' => $ac_types,
        ];

        return view('toko_kami', $data);
    }
}