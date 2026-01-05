<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{
    /**
     * Loads the homepage (main) view.
     */
    public function index()
    {
        // This will attempt to load the view file: app/Views/main.php
        return view('main');
    }
}