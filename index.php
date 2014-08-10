<?php
/*
 *Entry point of the application
 */
 
session_start();
 
require_once "bootstrap.php";
  
$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';

$controllerClass = $controller . 'Controller';

if( class_exists($controllerClass) )
{
	$controller = new $controllerClass($entityManager);
	$actionMethod = $action . 'Action';
	
	if( method_exists($controller,$actionMethod) )
	{
		$controller->$actionMethod();
	}
	else
	{
		echo 'Action not found.';
		die();
	}
}
else
{
	echo 'Controller not found.';
	die();
}

