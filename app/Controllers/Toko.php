<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Toko extends Controller
{
    /**
     * Loads the Toko Kami page view.
     */
    public function index()
    {
        // This will attempt to load the view file: app/Views/toko_kami.php
        return view('toko_kami');
    }
}