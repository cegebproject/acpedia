<?php namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
    protected $table      = 'user_role';
    protected $primaryKey = 'user_role_id';

    protected $allowedFields = ['user_id', 'role_id', 'assigned_at'];
    
    protected $useTimestamps = true;
    protected $createdField  = 'assigned_at'; // Use 'assigned_at' as the created_at field
    protected $updatedField  = null; // No updated_at in the schema for this table
    protected $dateFormat    = 'datetime';
}