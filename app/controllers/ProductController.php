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
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
