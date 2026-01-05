<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    // --- Model Configuration ---
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Can use 'object' or a custom entity class
    protected $useSoftDeletes = false; // Based on schema, no dedicated deleted_at column

    // The fields that are allowed to be set by a controller
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

    // --- Helper Methods for Relationships and Data Retrieval ---

    /**
     * Fetches products and eagerly loads related Brand, Category, and AC Type data.
     * * @param int|null $id Product ID to find, or null to get all
     * @return array
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
    
    /**
     * Overrides the findAll method to include product details by default.
     * Only call this if you want the joins every time.
     */
    // public function findAll(int $limit = 0, int $offset = 0)
    // {
    //     return $this->getProductDetails();
    // }

    /**
     * Converts JSON fields to array/object upon retrieval.
     */
    protected function afterFind(array $data)
    {
        if (isset($data['data']['additional_image_urls'])) {
            $data['data']['additional_image_urls'] = json_decode($data['data']['additional_image_urls'], true);
        }
        if (isset($data['data']['specifications'])) {
            $data['data']['specifications'] = json_decode($data['data']['specifications'], true);
        }
        return $data;
    }

    /**
     * Converts array/object fields to JSON string before saving.
     */
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
        if (isset($data['data']['additional_image_urls']) && is_array($data['data']['additional_image_urls'])) {
            $data['data']['additional_image_urls'] = json_encode($data['data']['additional_image_urls']);
        }
        if (isset($data['data']['specifications']) && is_array($data['data']['specifications'])) {
            $data['data']['specifications'] = json_encode($data['data']['specifications']);
        }
        
        // Ensure slug is set and unique before insert/update if name is provided
        if (isset($data['data']['name']) && !isset($data['data']['slug'])) {
            $data['data']['slug'] = url_title($data['data']['name'], '-', true);
        }
        
        return $data;
    }
}