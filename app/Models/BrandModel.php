<?php namespace App\Models;

use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table      = 'brands';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'name',
        'slug',
        'description',
        'logo_url',
        'website_url',
        'is_active',
        'sort_order'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}