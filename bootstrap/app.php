<?php

function init() {
    // Устанавливаем временную зону по умолчанию
    if (function_exists('date_default_timezone_set')) {
            date_default_timezone_set('Europe/Kiev');  
    }
    setlocale(LC_ALL, '');
    // Установка ukraine локали
    setlocale(LC_ALL, 'uk_UA');
}

function setErrorLogging(){
    if (APP_ENV == 'local') {
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL | E_WARNING | E_PARSE | E_NOTICE| E_DEPRECATED);
        ini_set('display_errors', "1");
    } else{
        error_reporting(E_ALL);
        ini_set('display_errors', "0");
    }
    ini_set('log_errors', "1");
    ini_set('error_log', LOGS . '/error_log.php');
}

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

function render($template, $data = null, $layout='app') 
{
	if ( !empty($data) ) {
		extract($data);
	}
	$template .= '.php';
	require VIEWS."/layouts/${layout}.php";
}

// ============================

require_once realpath(__DIR__.'/../config/app.php');

setErrorLogging();
init();
       
require_once CORE.'/Request.php';
require_once CORE.'/Router.php';
$router = Router::load(ROUTES);
$router->run(Request::uri(), Request::method());
