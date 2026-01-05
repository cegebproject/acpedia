<?php

namespace App\Controllers;

class AdminJournal extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Journal | ACPedia'
        ];
        return view('admin_journal_list');
    }
}
