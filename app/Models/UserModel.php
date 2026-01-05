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
        'is_active'
    ];

    // Timestamp fields
    protected $useTimestamps = true;

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

    // --- Role Management Methods ---

    /**
     * Gets all roles assigned to a user.
     * @param int $userId The ID of the user.
     * @return array An array of role data.
     */
    public function getUserRoles(int $userId): array
    {
        $userRoleModel = new UserRoleModel();
        
        return $this->db->table($userRoleModel->table)
            ->select('r.role_id, r.role_name, r.description')
            ->join('role r', 'r.role_id = user_role.role_id')
            ->where('user_id', $userId)
            ->get()
            ->getResultArray();
    }

    /**
     * Replaces all existing roles for a user with a new set of roles.
     * This is an efficient way to 'change' roles.
     * * @param int $userId The ID of the user.
     * @param array $roleIds An array of new role IDs to assign.
     * @return bool
     */
    public function updateUserRoles(int $userId, array $roleIds): bool
    {
        $userRoleModel = new UserRoleModel();

        // 1. Start a transaction for safety
        $this->db->transStart();

        // 2. Remove all existing roles for the user
        $userRoleModel->where('user_id', $userId)->delete();

        if (!empty($roleIds)) {
            // 3. Prepare new roles data for batch insertion
            $newRoles = [];
            foreach ($roleIds as $roleId) {
                $newRoles[] = [
                    'user_id' => $userId,
                    'role_id' => $roleId,
                    'assigned_at' => date('Y-m-d H:i:s'),
                ];
            }

            // 4. Insert the new roles
            $userRoleModel->insertBatch($newRoles);
        }

        // 5. Complete transaction
        return $this->db->transComplete();
    }
}