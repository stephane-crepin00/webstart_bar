<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('ROOT', dirname(__DIR__));
define('WEBSITE_URL', "Location: http://bar.webstart.local/");


require_once '../App/Autoloader.php';

App\Autoloader::register(); 

$page = 'home';
$action = 'show';

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} 

$nameController = 'App\Controller\\' . ucfirst($page) . 'Controller';

if (!class_exists($nameController) || !method_exists($nameController, $action)) {
	Header('Location: '.WEBSITE_URL);
}

$controller = new $nameController;

echo $controller->$action();