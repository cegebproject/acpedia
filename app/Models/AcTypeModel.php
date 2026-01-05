<?php namespace App\Models;

use CodeIgniter\Model;

class AcTypeModel extends Model
{
    protected $table      = 'ac_types';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'name',
        'slug',
        'icon_url',
        'description',
        'sort_order',
        'is_active'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}