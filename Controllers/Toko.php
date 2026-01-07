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
    // --- 1. Configuration & Instantiation ---
    $limit = 16; // Products per page

    // Use the model() helper for instantiation
    $productModel  = model('ProductModel');
    $brandModel    = model('BrandModel');
    $acTypeModel   = model('AcTypeModel');
    $pkListModel   = model('PkListModel');
    $categoryModel = model('CategoryModel');


    // --- 2. Retrieve & Sanitize Filters and Search/Sort ---
    
    // Paging: Calculate Current Page and Offset manually
    $currentPage = (int)($this->request->getGet('page') ?? 1);
    $currentPage = max(1, $currentPage); // Ensure page is at least 1
    $offset = ($currentPage - 1) * $limit;

    $search = $this->request->getGet('search');
    $sort = $this->request->getGet('sort');

    // Consolidate filter retrieval and sanitation.
    $filters = [
        'brand_id'    => (int)($this->request->getGet('brand_id') ?? 0) ?: null,
        'ac_type_id'  => (int)($this->request->getGet('ac_type_id') ?? 0) ?: null,
        'pk_id'       => (int)($this->request->getGet('pk_id') ?? 0) ?: null,
        'category_id' => (int)($this->request->getGet('category_id') ?? 0) ?: null,
    ];
    $activeFilters = array_filter($filters);


    // --- 3. Fetch Product Data and Total Count ---

    $products      = $productModel->getFilteredProducts($activeFilters, $search, $limit, $offset, $sort);
    $totalProducts = $productModel->getFilteredProductCount($activeFilters, $search);

    if ($totalProducts === 0) {
        $currentPage = 1;
    }


    // --- 4. Fetch Filter Lists (Sidebar Data) ---

    $brands     = $brandModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
    $acTypes    = $acTypeModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();
    $pkList     = $pkListModel->orderBy('sort_order', 'ASC')->findAll();
    $categories = $categoryModel->where('is_active', 1)->orderBy('sort_order', 'ASC')->findAll();


    // --- 5. Calculate Static AC Type Counts (Optimized Loop) ---
    
    $acTypeGroups = [
        'count_wms' => [2], 'count_cas' => [6, 7], 'count_fls' => [3, 4], 
        'count_cls' => [5], 'count_vrf' => [8, 9], 'count_cld' => [10],
    ];

    $staticCounts = [];
    $trackedIds = [];
    $productBuilder = $productModel->builder()->where('is_active', 1);

    foreach ($acTypeGroups as $key => $ids) {
        $staticCounts[$key] = $productBuilder->resetQuery()->whereIn('ac_type_id', $ids)->countAllResults();
        $trackedIds = array_merge($trackedIds, $ids);
    }

    $trackedIds = array_unique($trackedIds);
    $staticCounts['count_etc'] = $productBuilder->resetQuery()->whereNotIn('ac_type_id', $trackedIds)->countAllResults();


    // --- 6. Manual Pagination HTML Generation ---
    
    $totalPages = (int)ceil($totalProducts / $limit);
    $paginationLinks = '';

    if ($totalPages > 1) {
        
        // 6a. Generate Base URL (Preserves all current filters/search/sort)
        $currentQueryParams = $this->request->getGet();
        unset($currentQueryParams['page']); // Exclude 'page' so we can append it cleanly
        $queryString = http_build_query($currentQueryParams);
        $baseUrl = current_url() . (empty($queryString) ? '?' : '?' . $queryString . '&');

        // Configuration for link range (e.g., 2 pages before and 2 after)
        $range = 2; 
        $startPage = max(1, $currentPage - $range);
        $endPage = min($totalPages, $currentPage + $range);
        
        // 6b. HTML Generation start (Mimics tailwind_full.php structure)
        $paginationLinks .= '<div class="flex justify-center items-center gap-2 mt-8">';
        
        // --- Previous Button ---
        if ($currentPage > 1) {
            $prevPage = $currentPage - 1;
            $prevUrl = $baseUrl . 'page=' . $prevPage;
            $paginationLinks .= '<a href="' . $prevUrl . '" class="page-btn px-3 py-2 border border-gray-300 rounded-lg transition-colors">';
            $paginationLinks .= '<i data-lucide="chevron-left" class="h-5 w-5"></i></a>';
        } else {
            $paginationLinks .= '<span class="px-3 py-2 border border-gray-200 rounded-lg opacity-50">';
            $paginationLinks .= '<i data-lucide="chevron-left" class="h-5 w-5"></i></span>';
        }
        
        // --- Page Numbers ---
        for ($i = $startPage; $i <= $endPage; $i++) {
            $linkUrl = $baseUrl . 'page=' . $i;
            if ($i === $currentPage) {
                // Active link
                $paginationLinks .= '<span class="page-btn active px-4 py-2 border border-gray-300 rounded-lg bg-gray-200 font-semibold">';
                $paginationLinks .= $i . '</span>';
            } else {
                // Inactive link
                $paginationLinks .= '<a href="' . $linkUrl . '" class="page-btn px-4 py-2 border border-gray-300 rounded-lg transition-colors">';
                $paginationLinks .= $i . '</a>';
            }
        }
        
        // --- Next Button ---
        if ($currentPage < $totalPages) {
            $nextPage = $currentPage + 1;
            $nextUrl = $baseUrl . 'page=' . $nextPage;
            $paginationLinks .= '<a href="' . $nextUrl . '" class="page-btn px-3 py-2 border border-gray-300 rounded-lg transition-colors">';
            $paginationLinks .= '<i data-lucide="chevron-right" class="h-5 w-5"></i></a>';
        } else {
            $paginationLinks .= '<span class="px-3 py-2 border border-gray-200 rounded-lg opacity-50">';
            $paginationLinks .= '<i data-lucide="chevron-right" class="h-5 w-5"></i></span>';
        }

        $paginationLinks .= '</div>';
    }


    // --- 7. Pass Data to View ---
    $data = [
        'products'       => $products,
        
        // Filter Lists
        'brands'         => $brands,
        'acTypes'        => $acTypes,
        'pkList'         => $pkList,
        'categories'     => $categories,

        // Current State (for sticky filter forms)
        'currentFilters' => $activeFilters,
        'currentSearch'  => $search,
        'currentSort'    => $sort,

        // Pagination Data
        'paginationLinks' => $paginationLinks, // The generated HTML string
        'totalProducts'  => $totalProducts,
        'currentPage'    => $currentPage,
        'perPage'        => $limit,
    ];

    // Safely merge static counts array for wide PHP compatibility
    $data = array_merge($data, $staticCounts);

    return view('toko_kami', $data);
}


/**
 * Displays the detail page for a specific product using its slug.
 */
public function detail($slug)
{
    $productModel = model('ProductModel');

    // 1. Fetch the product by slug
    // We use where() because getProductDetails() defaults to find() which uses the primary key.
    $product = $productModel->select('products.*, b.name AS brand_name, c.name AS category_name, ac.name AS ac_type_name, pk.name AS pk_name')
                            ->join('brands b', 'b.id = products.brand_id', 'left')
                            ->join('categories c', 'c.id = products.category_id', 'left')
                            ->join('ac_types ac', 'ac.id = products.ac_type_id', 'left')
                            ->join('pk_list pk', 'pk.id = products.pk_id', 'left')
                            ->where('products.slug', $slug)
                            ->where('products.is_active', 1)
                            ->first();

    if (!$product) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk dengan slug $slug tidak ditemukan.");
    }

    // 2. Fetch Related Products (same category, excluding current product)
    $relatedProducts = $productModel->where('category_id', $product['category_id'])
                                    ->where('id !=', $product['id'])
                                    ->where('is_active', 1)
                                    ->limit(4)
                                    ->findAll();
                                    
    if ($product) {
        // Manually decode if the model hook missed it
        if (is_string($product['additional_image_urls'])) {
            $product['additional_image_urls'] = json_decode($product['additional_image_urls'], true) ?: [];
        }
        if (is_string($product['specifications'])) {
            $product['specifications'] = json_decode($product['specifications'], true) ?: [];
        }
    }

    $data = [
        'product'         => $product,
        'relatedProducts' => $relatedProducts,
        'meta_title'      => $product['meta_title'] ?: $product['name'],
        'meta_desc'       => $product['meta_description'],
    ];

    return view('product_detail', $data);
}

public function komparasi($slug1 = null, $slug2 = null, $slug3 = null)
{
    $productModel = model('ProductModel');
    
    $slots = [
        1 => $slug1,
        2 => $slug2,
        3 => $slug3
    ];
    
    $productsBySlot = [1 => null, 2 => null, 3 => null];
    
    foreach ($slots as $slotNum => $slug) {
        if ($slug && $slug !== 'empty') {
            $productsBySlot[$slotNum] = $productModel->select('products.*, b.name AS brand_name, ac.name AS ac_type_name, pk.name AS pk_name')
                ->join('brands b', 'b.id = products.brand_id', 'left')
                ->join('ac_types ac', 'ac.id = products.ac_type_id', 'left')
                ->join('pk_list pk', 'pk.id = products.pk_id', 'left')
                ->where('products.slug', $slug)
                ->where('products.is_active', 1)
                ->first();
        }
    }

    return view('komparasi', [
        'products' => $productsBySlot,
        'slug1'    => $slug1,
        'slug2'    => $slug2,
        'slug3'    => $slug3
    ]);
}

public function searchProducts()
{
    $search = $this->request->getGet('q');
    if (empty($search)) return $this->response->setJSON([]);

    $productModel = model('ProductModel');
    $results = $productModel->select('name, slug, main_image_url')
                            ->where('is_active', 1)
                            ->like('name', $search)
                            ->limit(5)
                            ->findAll();

    return $this->response->setJSON($results);
}
}