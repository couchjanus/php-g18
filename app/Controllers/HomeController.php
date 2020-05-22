<?php
// HomeController.php
require_once CORE.'/Controller.php';
require_once MODELS.'/Category.php';

class HomeController extends Controller
{
    public function index()
    {
      $title = 'Our <b>Best Cat Members Home Page </b>';
      $categories = (new Category())->getCategories();
      $this->view->render('home/index', compact('title', 'categories'));
    }

    
}
