<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    // --- Model Configuration ---
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; 
    protected $useSoftDeletes = false; 

    // The fields that are allowed to be set by a controller
    // Note: 'sort_order' is absent here, confirming the column is likely missing from the 'products' table.
    protected $allowedFields = [
        'category_id',
        'ac_type_id',
        'brand_id',
        'pk_id',
        'series_ac',
        'name',
        'slug',
        'base_price',
        'sale_price',
        'main_image_url',
        'additional_image_urls', // JSON
        'specifications',        // JSON
        'features',
        'warranty_info',
        'is_active',
        'is_featured',
        'avg_rating',
        'review_count',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'refrigerant_type',
        'model_indoor',
        'model_outdoor',
        'btu_per_hour',
        'daya_listrik',
        'made_in',
        'bobot_tkdn',
        'dimensi_indoor',
        'dimensi_outdoor',
        'indoor_width_mm',
        'indoor_depth_mm',
        'indoor_height_mm',
        'outdoor_width_mm',
        'outdoor_depth_mm',
        'outdoor_height_mm',
        'indoor_weight_kg',
        'outdoor_weight_kg',
        'liquid_pipe_size_inches',
        'gas_pipe_size_inches',
        'drain_pipe_size_inches',
        'max_pipe_length_m',
        'max_pipe_height_m',
        'garansi_sparepart',
        'garansi_kompressor',
        'general_description',
    ];

    // Timestamp fields
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation rules (add more as needed)
    protected $validationRules = [
        'name'       => 'required|min_length[3]|max_length[255]',
        'slug'       => 'required|is_unique[products.slug,id,{id}]|alpha_dash|max_length[270]',
        'base_price' => 'required|numeric|greater_than_equal_to[0]',
        'category_id' => 'permit_empty|integer',
        'brand_id'   => 'permit_empty|integer',
    ];
    
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // --- NEW: Methods for Filtering and Pagination ---

    /**
     * Fetches products with details, supporting filtering, searching, and pagination.
     */
    public function getFilteredProducts(array $filters = [], ?string $search = null, int $limit = 12, int $offset = 0, ?string $sort = null)
    {
        $builder = $this->select('products.*, 
                                  b.name AS brand_name, 
                                  c.name AS category_name, 
                                  ac.name AS ac_type_name,
                                  pk.name AS pk_name')
                        ->join('brands b', 'b.id = products.brand_id', 'left')
                        ->join('categories c', 'c.id = products.category_id', 'left')
                        ->join('ac_types ac', 'ac.id = products.ac_type_id', 'left')
                        ->join('pk_list pk', 'pk.id = products.pk_id', 'left')
                        ->where('products.is_active', 1);

        // Apply Filters
        foreach ($filters as $key => $value) {
            if (!empty($value)) {
                if (in_array($key, ['brand_id', 'ac_type_id', 'pk_id', 'category_id'])) {
                     $builder->where("products." . $key, $value);
                }
            }
        }

        // Apply Search
        if ($search) {
            $builder->like('products.name', $search);
        }
        
        // Apply Sorting
        switch ($sort) {
            case 'price_asc':
                $builder->orderBy('products.base_price', 'ASC');
                break;
            case 'price_desc':
                $builder->orderBy('products.base_price', 'DESC');
                break;
            case 'name_asc':
                $builder->orderBy('products.name', 'ASC');
                break;
            case 'name_desc':
                $builder->orderBy('products.name', 'DESC');
                break;
            default: // Newest (default)
                $builder->orderBy('products.created_at', 'DESC');
                break;
        } 

        // Apply Pagination
        return $builder->findAll($limit, $offset);
    }

    /**
     * Gets the total count of products based on applied filters/search for pagination links.
     */
    public function getFilteredProductCount(array $filters = [], ?string $search = null)
    {
        // Start with the base query builder
        $builder = $this->builder()
                        ->where('products.is_active', 1); 

        // Apply Filters
        foreach ($filters as $key => $value) {
            if (!empty($value)) {
                if (in_array($key, ['brand_id', 'ac_type_id', 'pk_id', 'category_id'])) {
                     $builder->where("products." . $key, $value);
                }
            }
        }

        // Apply Search
        if ($search) {
            $builder->like('products.name', $search);
        }
        
        return $builder->countAllResults();
    }
    
    // --- Existing Helper Methods ---
    
    /**
     * Fetches products and eagerly loads related Brand, Category, and AC Type data.
     */
    public function getProductDetails(?int $id = null)
    {
        $builder = $this->select('products.*, 
                                  b.name AS brand_name, 
                                  c.name AS category_name, 
                                  ac.name AS ac_type_name,
                                  pk.name AS pk_name')
                        ->join('brands b', 'b.id = products.brand_id', 'left')
                        ->join('categories c', 'c.id = products.category_id', 'left')
                        ->join('ac_types ac', 'ac.id = products.ac_type_id', 'left')
                        ->join('pk_list pk', 'pk.id = products.pk_id', 'left');

        if ($id) {
            return $builder->find($id);
        }

        return $builder->findAll();
    }
    
    public function countProductsByCategory(int $categoryId): int
{
    // Ensure only active products are counted
    return $this->where('category_id', $categoryId)
                ->where('is_active', 1)
                ->countAllResults();
}

public function countProductsByAcTypes(array $acTypeIds): int
{
    if (empty($acTypeIds)) {
        return 0;
    }
    return $this->whereIn('ac_type_id', $acTypeIds)
                ->where('is_active', 1)
                ->countAllResults();
}

/**
 * Menghitung jumlah produk aktif yang ID AC Type-nya TIDAK termasuk dalam daftar ID yang dikecualikan.
 * (Khusus untuk kelompok 'Produk Lainnya')
 */
public function countProductsByOtherAcTypes(array $excludedAcTypeIds): int
{
    // Menggunakan whereNotIn untuk mengecualikan semua ID yang sudah dihitung sebelumnya
    return $this->whereNotIn('ac_type_id', $excludedAcTypeIds)
                ->where('is_active', 1)
                ->countAllResults();
}

    /**
     * Converts JSON fields to array/object upon retrieval.
     */
    protected function afterFind(array $data)
    {
        // ... (JSON decoding logic is unchanged)
        if (isset($data['data']['additional_image_urls'])) {
            $data['data']['additional_image_urls'] = json_decode($data['data']['additional_image_urls'], true);
        }
        if (isset($data['data']['specifications'])) {
            $data['data']['specifications'] = json_decode($data['data']['specifications'], true);
        }
        return $data;
    }

    // --- Existing Before Insert/Update Methods ---
    protected function beforeInsert(array $data)
    {
        $data = $this->handleJsonFields($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->handleJsonFields($data);
        return $data;
    }

    /**
     * Internal method to serialize JSON fields.
     */
    private function handleJsonFields(array $data)
    {
        // ... (JSON encoding and slug generation logic is unchanged)
        if (isset($data['data']['additional_image_urls']) && is_array($data['data']['additional_image_urls'])) {
            $data['data']['additional_image_urls'] = json_encode($data['data']['additional_image_urls']);
        }
        if (isset($data['data']['specifications']) && is_array($data['data']['specifications'])) {
            $data['data']['specifications'] = json_encode($data['data']['specifications']);
        }
        
        if (isset($data['data']['name']) && !isset($data['data']['slug'])) {
            $data['data']['slug'] = url_title($data['data']['name'], '-', true);
        }
        
        return $data;
    }
}