<?php

namespace App\Controllers;

class AdminUser extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\UserModel();

        $perPage = 15;
        $users = $model
            ->select('user.*, r.role_name')
            ->join('role r', 'r.role_id = user.role_id', 'left') // Join is now direct to 'role' table
            ->orderBy('user.created_at', 'DESC')
            ->paginate($perPage);

        $pager = $model->pager;

        $data = [
            'title' => 'User List | ACPedia',
            'users' => $users,
            'pager' => $pager,
        ];

        return view('admin_user_list', $data);
    }
    
    public function add(): string
    {
        $roleModel = new \App\Models\RoleModel();
        $roles = $roleModel->findAll();

        $data = [
            'title' => 'Add New User | ACPedia',
            'roles' => $roles,
            'user' => null,
            'userRole' => null
        ];
        return view('admin_user_add', $data);
    }

    public function edit($id): string
    {
        $model = new \App\Models\UserModel();
        $user = $model->find($id);

        $roleModel = new \App\Models\RoleModel();
        $roles = $roleModel->findAll();

        $data = [
            'title' => 'Edit User | ACPedia',
            'roles' => $roles,
            'user' => $user,
            'userRole' => $user['role_id'] ?? null
        ];
        return view('admin_user_add', $data);
    }

    public function save()
    {
        $model = new \App\Models\UserModel();
        $data = $this->request->getPost();

        // Handle password
        if (isset($data['password']) && empty($data['password'])) {
            unset($data['password']);
        }

        // 1. Get the single role ID from POST
        $roleId = $this->request->getPost('role_id');

        // 2. Add role_id to user data array for model saving
        $data['role_id'] = $roleId;

        // 3. Set validation rules based on insert or update
        if (isset($data['user_id'])) {
            // Update
            $rules = $model->validationRules;
            $rules['email'] = str_replace('{user_id}', $data['user_id'], $rules['email']);
            $rules['username'] = str_replace('{user_id}', $data['user_id'], $rules['username']);
        } else {
            // Insert
            $rules = $model->validationRules;
            $rules['email'] = 'required|max_length[100]|valid_email|is_unique[user.email]';
            $rules['username'] = 'required|max_length[50]|alpha_dash|is_unique[user.username]';
        }
        $model->setValidationRules($rules);

        // 3. The UserModel->save() call handles saving this field directly to the 'user' table
        $model->save($data);

        return redirect()->to('/admin/user');
    }

    public function delete($id)
    {
        $model = new \App\Models\UserModel();
        $model->delete($id);

        return redirect()->to('/admin/user');
    }
}