<?php
// remove in prod
//error_reporting(E_ALL);

session_start();
require('../app/model/RequestBuilder.php');
require('../app/utils/IncludesManager.php');

//Ftools
require('../app/utils/Ftools.php');

// setup config variables
$config_file = file_get_contents('../config.json');
$config_file = json_decode($config_file, true);
$GLOBALS = $config_file['global'];

//setup router & global variables with parameters
require('../app/middleware/RouteEngine.php');
$router_file = file_get_contents('router.json');
$router_file = json_decode($router_file, true);

// Route engine find the good configuration based on url parameters and router.json
$routeEngine = new RouteEngine($router_file);
$execConfig = $routeEngine->execConfig;
$GLOBALS['title'] = $execConfig['title'];

// App execution
require('../app/controller/'.$execConfig['controller'].'.php');
$controller = new $execConfig['controller'];
$methodStr = $execConfig['method'];
$controller->$methodStr();