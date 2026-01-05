<?php namespace App\Models;

use CodeIgniter\Model;

class PkListModel extends Model
{
    protected $table      = 'pk_list';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'name',
        'slug',
        'btu_min',
        'btu_max',
        'description',
        'sort_order'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}