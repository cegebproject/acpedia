<?php

namespace App\Controllers;

class AdminOrder extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Order List | ACPedia'
        ];
        return view('admin_order_list');
    }
}
