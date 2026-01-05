<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['username', 'password_hash', 'email', 'is_active'];

    public function getUserByEmail(string $email)
    {
        return $this->where('email', $email)->first();
    }
}