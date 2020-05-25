<?php

return [
   'about' => 'AboutController@index',
   'blog' => 'BlogController@index',
   'contact' => 'ContactController@index',
   //Главаня страница
   'index.php' => 'HomeController@index',
   '' => 'HomeController@index', 
   'admin' => 'Admin\DashboardController@index',
   'admin/categories' => 'Admin\CategoryController@index',
   'admin/categories/create' => 'Admin\CategoryController@create',
   'admin/categories/show/{id}' => 'Admin\CategoryController@show',
   'admin/categories/edit/{id}' => 'Admin\CategoryController@edit',
   'admin/categories/delete/{id}' => 'Admin\CategoryController@delete',
   
   'admin/categories/stote' => 'Admin\CategoryController@store',
   'admin/categories/update' => 'Admin\CategoryController@patch',
   
   '404' => 'ErrorController@notFound',
];
