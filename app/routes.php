 <?php

$router->get('', 'ProductController@index');
$router->get('product/list', 'ProductController@list');
$router->get('product/new', 'ProductController@add');
$router->post('product/store', 'ProductController@store');
$router->post('product/delete', 'ProductController@delete');