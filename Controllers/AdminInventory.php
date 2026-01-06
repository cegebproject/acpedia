<?php

namespace App\Controllers;

class AdminInventory extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Inventory | ACPedia'
        ];
        return view('admin_inventory_list');
    }
}
