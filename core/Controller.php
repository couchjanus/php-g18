<?php
// require_once CORE.'/View.php';
namespace Core;

use Core\View;

abstract class Controller
{
   protected $view;

   function __construct()
   {
       $this->view = new View();
   }
}
