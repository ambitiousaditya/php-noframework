<?php

namespace App\Controllers;

use App\Core\App;

class ProductController
{
    /**
     * Show the index page.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show product add page.
     */
    public function add()
    {
        return view('add');
    }

    /**
     * Store new product.
     */
    public function store()
    {
        if($_POST['type_switch']) {
            if ($_POST['type_switch'] === 'size') {
                $value = $_POST["size"];
            } elseif ($_POST['type_switch']  === 'weight') {
                $value = $_POST["weight"];
            } elseif ($_POST['type_switch']  === 'dimension') {
                $value = $_POST["height"].'x'.$_POST["width"].'x'.$_POST["length"];
            }
        }

        App::get('database')->insert('products', [
            'sku' => $_POST['sku'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'type' => $_POST['type_switch'],
            'value' => $value
        ]);
        return redirect('product/list');
    }

    /**
     * Show the product list page.
     */
    public function list()
    {
        $products = App::get('database')->selectAll('products');
        return view('list', [ 'products' => $products ]);
    }

    /**
     * Mass delete action
     */
    public function delete()
    {
        $data = arrayToString($_POST['product']);
        $products = App::get('database')->delete('products', 'id in ('. $data .')');
        return redirect('product/list');
    }
}
