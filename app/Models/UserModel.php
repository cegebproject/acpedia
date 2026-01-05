<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'user_id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array'; 
    protected $useSoftDeletes = false; 

    protected $allowedFields = [
        'username', 
        'password_hash', 
        'email', 
        'first_name', 
        'last_name', 
        'is_active',
        'role_id'
    ];

    // Timestamp fields
    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // Explicitly define the created field
    protected $updatedField  = 'updated_at'; // Explicitly define the updated field

    // Validation rules (critical for unique fields and password security)
    protected $validationRules = [
        'email'           => 'required|max_length[100]|valid_email|is_unique[user.email,user_id,{user_id}]',
        'username'        => 'required|max_length[50]|alpha_dash|is_unique[user.username,user_id,{user_id}]',
        'password'        => 'required_with[password_hash]|min_length[8]', // Validation for user-provided password before hashing
        'password_hash'   => 'permit_empty', // The hash field itself is not validated
        'first_name'      => 'permit_empty|max_length[50]',
    ];
    
    // --- Security Hooks (Password Hashing) ---
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        // Only hash if the 'password' field is present in the input data
        if (isset($data['data']['password']))
        {
            // Use CI4's built-in password utility (or PASSWORD_DEFAULT if preferred)
            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            
            // Remove the temporary password field before saving
            unset($data['data']['password']);
        }

        return $data;
    }

}