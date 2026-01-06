<?php namespace App\Controllers;

use CodeIgniter\Controller;
// Import all necessary Models
use App\Models\ProductModel;
use App\Models\BrandModel;
use App\Models\AcTypeModel;
use App\Models\PkListModel;
use App\Models\CategoryModel;

class Toko extends Controller
{
  /**
  * Loads the Toko Kami page view with product data, filters, and pagination.
  */
  public function index()
  {
    // 1. --- Configuration & Instantiation ---
    $limit = 12; // Products per page
   
    // FIX: Ensure currentPage is at least 1, preventing a negative offset.
    $currentPage = (int)($this->request->getGet('page') ?? 1);
    if ($currentPage < 1) {
      $currentPage = 1;
    }
   
    $offset = ($currentPage - 1) * $limit;

    // Instantiate models
    $productModel = new ProductModel();
    $brandModel = new BrandModel();
    $acTypeModel = new AcTypeModel();
    $pkListModel = new PkListModel();
    $categoryModel = new CategoryModel();
   
   
    // 2. --- Retrieve Filters, Search, and Sort from GET request ---
   
    // Ensure ID parameters are cast to (int) for correct database matching
    $brand_id = $this->request->getGet('brand_id');
    $brand_id = $brand_id ? (int)$brand_id : null;
   
    $ac_type_id = $this->request->getGet('ac_type_id');
    $ac_type_id = $ac_type_id ? (int)$ac_type_id : null;
   
    $pk_id = $this->request->getGet('pk_id');
    $pk_id = $pk_id ? (int)$pk_id : null;
   
    $category_id = $this->request->getGet('category_id');
    $category_id = $category_id ? (int)$category_id : null;
   
    $search = $this->request->getGet('search');
    $sort = $this->request->getGet('sort');

    // Define the list of active filters to be applied to the query
    $filters = [
      'brand_id' => $brand_id,
      'ac_type_id' => $ac_type_id,
      'pk_id' => $pk_id,
      'category_id' => $category_id,
    ];
   
    // 3. --- Fetch Data ---
   
    // Fetch products for the current page
    $products = $productModel->getFilteredProducts($filters, $search, $limit, $offset);
   
    // Fetch the total count of products matching the criteria
    $totalProducts = $productModel->getFilteredProductCount($filters, $search);

    // Fetch list data for sidebar filters (Dropdown/Quick Links)
    $brands = $brandModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
    $acTypes = $acTypeModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
    $pkList = $pkListModel->orderBy('sort_order', 'ASC')->findAll();
    $categories = $categoryModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
   
        // --- 4. Calculate Static AC Type Counts using Direct Query Builder ---
        $trackedIds = []; // Array untuk melacak semua ID AC Type yang sudah dihitung

        // 1. Wall Mounted Split (ID 2) -> $count_wms
        $wms_ids = [2];
        $count_wms = $productModel->where('is_active', 1)->where('ac_type_id', 2)->countAllResults();
        $trackedIds = array_merge($trackedIds, $wms_ids);

        // 2. Cassette (IDs 6, 7) -> $count_cas
        $cas_ids = [6, 7];
        $count_cas = $productModel->where('is_active', 1)->whereIn('ac_type_id', $cas_ids)->countAllResults();
        $trackedIds = array_merge($trackedIds, $cas_ids);

        // 3. Floor Standing (IDs 3, 4) -> $count_fls
        $fls_ids = [3, 4];
        $count_fls = $productModel->where('is_active', 1)->whereIn('ac_type_id', $fls_ids)->countAllResults();
        $trackedIds = array_merge($trackedIds, $fls_ids);

        // 4. Central AC (ID 5) -> $count_cls
        $cls_ids = [5];
        $count_cls = $productModel->where('is_active', 1)->where('ac_type_id', 5)->countAllResults();
        $trackedIds = array_merge($trackedIds, $cls_ids);

        // 5. VRV/VRF (IDs 8, 9) -> $count_vrf
        $vrf_ids = [8, 9];
        $count_vrf = $productModel->where('is_active', 1)->whereIn('ac_type_id', $vrf_ids)->countAllResults();
        $trackedIds = array_merge($trackedIds, $vrf_ids);

        // 6. AC Type ID 10 -> $count_cld
        $cld_ids = [10];
        $count_cld = $productModel->where('is_active', 1)->where('ac_type_id', 10)->countAllResults();
        $trackedIds = array_merge($trackedIds, $cld_ids);

        // 7. Produk Lainnya (Any ID Other than above mentioned) -> $count_etc
        $trackedIds = array_unique($trackedIds); // Pastikan tidak ada duplikasi
        $count_etc = $productModel->where('is_active', 1)->whereNotIn('ac_type_id', $trackedIds)->countAllResults();

    // 5. --- Pagination Setup ---
    $pager = service('pager');
    // The makeLinks function handles generating the URLs for pagination
    $paginationLinks = $pager->makeLinks($currentPage, $limit, $totalProducts, 'default_full');
   
    // 6. --- Pass Data to View ---
    $data = [
      'products' => $products,
     
      // Filter Data for view loops
      'brands' => $brands,
      'acTypes' => $acTypes,
      'pkList' => $pkList,
      'categories' => $categories,
     
      // STATIC AC TYPE COUNTS
      'count_wms' => $count_wms, // Wall Mounted Split (ID 2)
           'count_cas' => $count_cas, // Cassette (IDs 6, 7)
           'count_fls' => $count_fls, // Floor Standing (IDs 3, 4)
           'count_cls' => $count_cls, // Central AC (ID 5)
           'count_vrf' => $count_vrf, // VRV/VRF (IDs 8, 9)
           'count_cld' => $count_cld, // AC Type ID 10
           'count_etc' => $count_etc, // Any ID Other than above mentioned
     
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