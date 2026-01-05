<?php

namespace App\Controllers;

class AdminSettings extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Site Settings | ACPedia',
        ];

        return view('admin_settings', $data);
    }

    public function save()
    {
        // Placeholder - settings not yet implemented
        return redirect()->back()->with('warning', 'Settings functionality is not yet implemented.');
    }
}
