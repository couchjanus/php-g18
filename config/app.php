<?php

define('ROOT', realpath(__DIR__.'/../'));

const APP = ROOT.'/app';
const VIEWS = ROOT.'/app/Views';
// const CONTROLLERS = ROOT.'/app/Controllers';
const CONTROLLERS ="\App\Controllers\\";

const MODELS = ROOT.'/app/Models';
const CONFIG = ROOT.'/config';
const CORE = ROOT.'/core';

define('APP_ENV', 'local');
define('APP_DEBUG', false);
const EXT = '.php';
const APPNAME = 'Great Shopaholic';
const SLOGAN = "Let's Build Cool Site";
const LOGS = ROOT.'/logs';
define('DB_CONFIG_FILE', CONFIG.'/db.php');
define('ROUTES', CONFIG.'/routes'.EXT);

const SESSION_PREFIX = 'shop_';

define('UPLOADDIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR.'assets/images/products');

// Cookie defines
define( 'COOKIE_TIMEOUT', (52*7*60*60) ); //cookies set to a year by default

// current time
if( !defined( 'TIME_NOW' ) ) define( 'TIME_NOW', time() );