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

        // If editing, get existing user_id
        $userId = $data['user_id'] ?? null;

        if ($userId) {
            // Update user
            $model->update($userId, $data);
        } else {
            // Insert new user
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