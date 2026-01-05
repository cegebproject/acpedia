<?php

namespace App\Controllers;

class AdminMasterData extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Master Data Management | ACPedia',
        ];

        return view('admin_master_index', $data);
    }

    // Brands
    public function brands(): string
    {
        $model = new \App\Models\BrandModel();
        $brands = $model->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'title' => 'Brands | ACPedia',
            'items' => $brands,
            'entity' => 'brands',
            'entityName' => 'Brand',
        ];

        return view('admin_master_list', $data);
    }

    public function brandsAdd(): string
    {
        $data = [
            'title' => 'Add Brand | ACPedia',
            'item' => null,
            'entity' => 'brands',
            'entityName' => 'Brand',
        ];
        return view('admin_master_form', $data);
    }

    public function brandsEdit($id): string
    {
        $model = new \App\Models\BrandModel();
        $item = $model->find($id);

        $data = [
            'title' => 'Edit Brand | ACPedia',
            'item' => $item,
            'entity' => 'brands',
            'entityName' => 'Brand',
        ];
        return view('admin_master_form', $data);
    }

    public function brandsSave()
    {
        $model = new \App\Models\BrandModel();
        $data = $this->request->getPost();

        // Handle file upload for logo
        $logoFile = $this->request->getFile('logo_file');
        if ($logoFile && $logoFile->isValid() && !$logoFile->hasMoved()) {
            $newName = $logoFile->getRandomName();
            $logoFile->move(FCPATH . 'uploads/brands/', $newName);
            $data['logo_url'] = '/uploads/brands/' . $newName;
        }

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = url_title($data['name'], '-', true);
        }

        $id = $this->request->getPost('id');
        if ($id) {
            $model->update($id, $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/admin/master/brands');
    }

    public function brandsDelete($id)
    {
        $model = new \App\Models\BrandModel();
        $model->delete($id);

        return redirect()->to('/admin/master/brands');
    }

    // Categories
    public function categories(): string
    {
        $model = new \App\Models\CategoryModel();
        $categories = $model->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'title' => 'Categories | ACPedia',
            'items' => $categories,
            'entity' => 'categories',
            'entityName' => 'Category',
        ];

        return view('admin_master_list', $data);
    }

    public function categoriesAdd(): string
    {
        $data = [
            'title' => 'Add Category | ACPedia',
            'item' => null,
            'entity' => 'categories',
            'entityName' => 'Category',
        ];
        return view('admin_master_form', $data);
    }

    public function categoriesEdit($id): string
    {
        $model = new \App\Models\CategoryModel();
        $item = $model->find($id);

        $data = [
            'title' => 'Edit Category | ACPedia',
            'item' => $item,
            'entity' => 'categories',
            'entityName' => 'Category',
        ];
        return view('admin_master_form', $data);
    }

    public function categoriesSave()
    {
        $model = new \App\Models\CategoryModel();
        $data = $this->request->getPost();

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = url_title($data['name'], '-', true);
        }

        $id = $this->request->getPost('id');
        if ($id) {
            $model->update($id, $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/admin/master/categories');
    }

    public function categoriesDelete($id)
    {
        $model = new \App\Models\CategoryModel();
        $model->delete($id);

        return redirect()->to('/admin/master/categories');
    }

    // PK List
    public function pklist(): string
    {
        $model = new \App\Models\PkListModel();
        $items = $model->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'title' => 'PK Ratings | ACPedia',
            'items' => $items,
            'entity' => 'pklist',
            'entityName' => 'PK Rating',
        ];

        return view('admin_master_list', $data);
    }

    public function pklistAdd(): string
    {
        $data = [
            'title' => 'Add PK Rating | ACPedia',
            'item' => null,
            'entity' => 'pklist',
            'entityName' => 'PK Rating',
        ];
        return view('admin_master_form', $data);
    }

    public function pklistEdit($id): string
    {
        $model = new \App\Models\PkListModel();
        $item = $model->find($id);

        $data = [
            'title' => 'Edit PK Rating | ACPedia',
            'item' => $item,
            'entity' => 'pklist',
            'entityName' => 'PK Rating',
        ];
        return view('admin_master_form', $data);
    }

    public function pklistSave()
    {
        $model = new \App\Models\PkListModel();
        $data = $this->request->getPost();

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = url_title($data['name'], '-', true);
        }

        $id = $this->request->getPost('id');
        if ($id) {
            $model->update($id, $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/admin/master/pklist');
    }

    public function pklistDelete($id)
    {
        $model = new \App\Models\PkListModel();
        $model->delete($id);

        return redirect()->to('/admin/master/pklist');
    }

    // AC Types
    public function actypes(): string
    {
        $model = new \App\Models\AcTypeModel();
        $items = $model->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'title' => 'AC Types | ACPedia',
            'items' => $items,
            'entity' => 'actypes',
            'entityName' => 'AC Type',
        ];

        return view('admin_master_list', $data);
    }

    public function actypesAdd(): string
    {
        $data = [
            'title' => 'Add AC Type | ACPedia',
            'item' => null,
            'entity' => 'actypes',
            'entityName' => 'AC Type',
        ];
        return view('admin_master_form', $data);
    }

    public function actypesEdit($id): string
    {
        $model = new \App\Models\AcTypeModel();
        $item = $model->find($id);

        $data = [
            'title' => 'Edit AC Type | ACPedia',
            'item' => $item,
            'entity' => 'actypes',
            'entityName' => 'AC Type',
        ];
        return view('admin_master_form', $data);
    }

    public function actypesSave()
    {
        $model = new \App\Models\AcTypeModel();
        $data = $this->request->getPost();

        // Handle file upload for icon
        $iconFile = $this->request->getFile('icon_file');
        if ($iconFile && $iconFile->isValid() && !$iconFile->hasMoved()) {
            $newName = $iconFile->getRandomName();
            $iconFile->move(FCPATH . 'uploads/actypes/', $newName);
            $data['icon_url'] = '/uploads/actypes/' . $newName;
        }

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = url_title($data['name'], '-', true);
        }

        $id = $this->request->getPost('id');
        if ($id) {
            $model->update($id, $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/admin/master/actypes');
    }

    public function actypesDelete($id)
    {
        $model = new \App\Models\AcTypeModel();
        $model->delete($id);

        return redirect()->to('/admin/master/actypes');
    }
}