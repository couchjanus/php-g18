<?php

$router->get('', 'HomeController@index');
$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');
$router->get('404', 'ErrorController@notFound');
$router->get('admin', 'Admin\DashboardController@index');
$router->get('admin/categories', 'Admin\CategoryController@index');
$router->get('admin/categories/create', 'Admin\CategoryController@create');
$router->post('admin/categories/store', 'Admin\CategoryController@store');
$router->get('admin/categories/show/{id}', 'Admin\CategoryController@show');
$router->get('admin/categories/edit/{id}', 'Admin\CategoryController@edit');
$router->post('admin/categories/update', 'Admin\CategoryController@patch');
$router->get('admin/categories/delete/{id}', 'Admin\CategoryController@delete');
$router->post('admin/categories/delete', 'Admin\CategoryController@destroy');

$router->get('admin/brands', 'Admin\BrandController@index');
$router->get('admin/brands/create', 'Admin\BrandController@create');
$router->post('admin/brands/store', 'Admin\BrandController@store');

$router->get('admin/products', 'Admin\ProductController@index');
$router->get('admin/products/create', 'Admin\ProductController@create');
$router->post('admin/products/store', 'Admin\ProductController@store');

$router->get('admin/roles', 'Admin\RoleController@index');
$router->get('admin/roles/create', 'Admin\RoleController@create');
$router->post('admin/roles/store', 'Admin\RoleController@store');

$router->get('admin/users', 'Admin\UserController@index');
$router->get('admin/users/create', 'Admin\UserController@create');
$router->post('admin/users/store', 'Admin\UserController@store');

$router->get('admin/orders', 'Admin\OrderController@index');
$router->get('admin/orders/show/{id}', 'Admin\OrderController@show');
$router->post('admin/orders/edit/{id}', 'Admin\OrderController@edit');
$router->post('admin/orders/update', 'Admin\OrderController@patch');
$router->get('admin/orders/delete/{id}', 'Admin\OrderController@delete');
$router->post('admin/orders/delete', 'Admin\OrderController@destroy');

$router->get('api/shop', 'HomeController@getProducts');
$router->get('api/shop/{id}', 'HomeController@getProduct');
$router->get('api/product/{id}', 'HomeController@getProductItem');
$router->get('api/categories', 'HomeController@getCategories');
$router->get('api/categories/{id}', 'HomeController@getProductsByCategory');

$router->post('api/cart', 'OrderController@cart');

$router->get('sign', 'LoginController@signForm');
$router->post('register', 'RegisterController@signup');
$router->post('login', 'LoginController@signin');
$router->get('logout', 'LoginController@logout');

$router->get('profile', 'ProfileController@index');
$router->get('profile/orders', 'ProfileController@ordersList');
$router->get('profile/orders/view/{id}', 'ProfileController@orderView');
$router->get('profile/orders/check/{id}', 'ProfileController@checkOrder');
$router->post('profile/orders/change', 'ProfileController@changeOrder');

