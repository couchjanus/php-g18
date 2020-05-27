<?php

$router->get('', 'HomeController@index');
$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');
$router->get('404', 'ErrorController@notFound');
$router->get('admin', 'Admin\DashboardController@index');
$router->get('admin/categories', 'Admin\CategoryController@index');
$router->get('admin/categories/create', 'Admin\CategoryController@create');
$router->post('admin/categories/stote', 'Admin\CategoryController@store');
$router->get('admin/categories/show/{id}', 'Admin\CategoryController@show');
$router->get('admin/categories/edit/{id}', 'Admin\CategoryController@edit');
$router->post('admin/categories/update', 'Admin\CategoryController@patch');
$router->get('admin/categories/delete/{id}', 'Admin\CategoryController@delete');
$router->post('admin/categories/delete', 'Admin\CategoryController@destroy');
