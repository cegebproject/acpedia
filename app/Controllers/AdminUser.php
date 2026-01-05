<?php

namespace App\Controllers;

class AdminUser extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\UserModel();

        $perPage = 15;
        $users = $model
            ->select('user.*, GROUP_CONCAT(r.role_name SEPARATOR ", ") as roles')
            ->join('user_role ur', 'ur.user_id = user.user_id', 'left')
            ->join('role r', 'r.role_id = ur.role_id', 'left')
            ->groupBy('user.user_id')
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
            'userRoles' => []
        ];
        return view('admin_user_add', $data);
    }

    public function edit($id): string
    {
        $model = new \App\Models\UserModel();
        $user = $model->find($id);
        $userRoles = $model->getUserRoles($id);
        $userRoleIds = array_column($userRoles, 'role_id');

        $roleModel = new \App\Models\RoleModel();
        $roles = $roleModel->findAll();

        $data = [
            'title' => 'Edit User | ACPedia',
            'roles' => $roles,
            'user' => $user,
            'userRoles' => $userRoleIds
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

        // Handle roles
        $roleIds = $this->request->getPost('roles') ?? [];

        // Remove roles from data to avoid saving to user table
        unset($data['roles']);

        // Handle user_id
        $userId = $this->request->getPost('user_id');
        $userId = is_scalar($userId) ? $userId : (is_array($userId) ? $userId[0] : '');
        $userId = (int) $userId;
        unset($data['user_id']);

        if ($userId) {
            // Update
            $rules = $model->validationRules;
            $rules['email'] = str_replace('{user_id}', $userId, $rules['email']);
            $rules['username'] = str_replace('{user_id}', $userId, $rules['username']);
            $model->setValidationRules($rules);
            $model->update($userId, $data);
        } else {
            // Insert
            $rules = $model->validationRules;
            $rules['email'] = 'required|max_length[100]|valid_email|is_unique[user.email]';
            $rules['username'] = 'required|max_length[50]|alpha_dash|is_unique[user.username]';
            $model->setValidationRules($rules);
            $userId = $model->insert($data);
        }

        // Update roles
        $model->updateUserRoles($userId, $roleIds);

        return redirect()->to('/admin/user');
    }

    public function delete($id)
    {
        $model = new \App\Models\UserModel();
        $model->delete($id);

        return redirect()->to('/admin/user');
    }
}