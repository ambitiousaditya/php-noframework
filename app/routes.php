 <?php

$router->get('', 'ProductController@index');
$router->get('product/add', 'ProductController@add');
$router->post('product/store', 'ProductController@store');