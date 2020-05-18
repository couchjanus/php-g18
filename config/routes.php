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
];
