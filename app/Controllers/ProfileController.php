<?php
// AboutController.php
require_once CORE.'/Controller.php';

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'Your Profile';
        $this->view->render('about/index', ['title'=>$title]);
    }
}