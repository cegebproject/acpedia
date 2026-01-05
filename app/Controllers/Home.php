<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard | ACPedia'
        ];
        return view('welcome_message');
    }
}
