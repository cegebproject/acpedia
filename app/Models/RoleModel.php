<?php namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table      = 'role';
    protected $primaryKey = 'role_id';

    protected $allowedFields = ['role_name', 'description'];
    
    // You may want to fetch roles by name later
    public function getRoleIdByName(string $roleName)
    {
        return $this->where('role_name', $roleName)->first();
    }
}