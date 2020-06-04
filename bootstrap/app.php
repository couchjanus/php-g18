<?php

function conf($mix) {
    $url = CONFIG."/".$mix.".json";
    try{
        //Attempt to open json file.
        $jsonFile = file_get_contents($url);
        //If fopen returns a boolean FALSE value, then an error has occurred.
        if($jsonFile === false){
            throw new Exception('Could not open json file!');
        }
        return json_decode($jsonFile, TRUE);
    } 
    //CATCH the exception if something goes wrong.
    catch (Exception $ex) {
        //Print out the exception message.
        echo $ex->getMessage();
        return false;
    }
}

// ============================
require realpath(__DIR__).'/../vendor/autoload.php'; //this autoloads everything
require_once realpath(__DIR__.'/../config/app.php');

// require_once CORE.'/App.php';
require_once CORE.'/Helper.php';

// $app = new App();

$app = new \Core\App();
$app->init();
