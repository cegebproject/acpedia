<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

 public function attemptLogin()
{
    $model = new \App\Models\AuthModel();
    
    // Capture email instead of username
    $email    = $this->request->getPost('email'); 
    $password = (string)$this->request->getPost('password');

    // Query by email
    $user = $model->getUserByEmail($email);

    if ($user) {
        // Verify the Bcrypt hash
        if (password_verify($password, $user['password_hash'])) {
            
            if ($user['is_active'] == 0) {
                return redirect()->back()->with('error', 'Account is inactive.');
            }

            // Set session data
            session()->set([
                'user_id'    => $user['user_id'],
                'email'      => $user['email'],
                'first_name' => $user['first_name'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/admin/dashboard');
        }
    }

    return redirect()->back()->with('error', 'Invalid email or password.');
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}