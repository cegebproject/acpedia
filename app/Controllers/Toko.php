<?php namespace App\Controllers;

use CodeIgniter\Controller;
// Import all necessary Models
use App\Models\ProductModel;
use App\Models\BrandModel;
use App\Models\AcTypeModel;
use App\Models\PkListModel;

class Toko extends Controller
{
    /**
     * Loads the Toko Kami page view with product data, filters, and pagination.
     */
    public function index()
    {
        // 1. --- Configuration & Instantiation ---
        $limit = 12; // Products per page (Standard value, adjust as needed)
        
        // Get current page from the 'page' query parameter, default to 1.
        $currentPage = (int)($this->request->getGet('page') ?? 1);
        $offset = ($currentPage - 1) * $limit; // Calculate starting offset for the SQL query

        // Instantiate models
        $productModel = new ProductModel();
        $brandModel = new BrandModel();
        $acTypeModel = new AcTypeModel();
        $pkListModel = new PkListModel();
        
        // 2. --- Retrieve Filters, Search, and Sort from GET request ---
        $brand_id = $this->request->getGet('brand_id');
        $ac_type_id = $this->request->getGet('ac_type_id');
        $pk_id = $this->request->getGet('pk_id');
        $search = $this->request->getGet('search');
        $sort = $this->request->getGet('sort'); // Placeholder for potential future sorting

        // Define the list of active filters to be applied to the query
        $filters = [
            'brand_id' => $brand_id,
            'ac_type_id' => $ac_type_id,
            'pk_id' => $pk_id,
        ];
        
        // 3. --- Fetch Data (Products) ---
        
        // Fetch products for the current page, applying all filters/search
        $products = $productModel->getFilteredProducts($filters, $search, $limit, $offset);
        
        // Fetch the total count of products matching the criteria for pagination links
        $totalProducts = $productModel->getFilteredProductCount($filters, $search);

        // Fetch list data for sidebar filters (for dropdown options)
        $brands = $brandModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
        $acTypes = $acTypeModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
        $pkList = $pkListModel->orderBy('sort_order', 'ASC')->findAll();

        // 4. --- Pagination Setup ---
        $pager = service('pager');
        // 'default_full' is a common template for pagination links
        $paginationLinks = $pager->makeLinks($currentPage, $limit, $totalProducts, 'default_full');
        
        // 5. --- Pass Data to View ---
        $data = [
            'products' => $products,
            // Sidebar Filter Data
            'brands' => $brands,
            'acTypes' => $acTypes,
            'pkList' => $pkList,
            
            // Current State (for sticky filter forms)
            'currentFilters' => $filters,
            'currentSearch' => $search,
            'currentSort' => $sort,

            // Pagination Data
            'pagerLinks' => $paginationLinks,
            'totalProducts' => $totalProducts,
            'currentPage' => $currentPage,
            'perPage' => $limit,
        ];

        return view('toko_kami', $data);
    }
}