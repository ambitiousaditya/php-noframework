<?php

namespace App\Controllers;

class ProductController
{
    /**
     * Show the home page.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the about page.
     */
    public function add()
    {
        return view('add');
    }
}
