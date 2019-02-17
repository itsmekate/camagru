<?php
// FRONT CONTROLLER

//general setup
ini_set('display_errors',1);
error_reporting(E_ALL);

//adding sys files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

//database

//router
$router = new Router();
$router->run();


?>
