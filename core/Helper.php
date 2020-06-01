<?php

class Helper
{
    public static function redirect($redirect_url = '/')
    {
        header('HTTP/1.1 200 OK');
        header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        exit();
    }
    public static function isGuest()
    {
        if (isset($_COOKIE['Logged'])) {
            return false;
        }
        return true;
    }

    public static function isMessage()
    {
        if (Session::get('error')) {
            return ['error', Session::get('error')];
        } 
        if (Session::get('message')) {
            return ['success', Session::get('message')];
        }
        return false;
    }
}
