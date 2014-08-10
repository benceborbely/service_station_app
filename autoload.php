<?php

define('APP_PATH', __DIR__);

require_once __DIR__ . '/vendor/composer' . '/autoload_real.php';

function autoloadControllers($controllerName)
{
    $controller = APP_PATH . '\front\controller\\' . ucfirst($controllerName) . '.php';
    
	if( file_exists($controller) )
	{
		require_once($controller);
		return true;
	}

	return false;
}

function autoloadEntities($entityName)
{
    $entity = APP_PATH . '/entities/' . ucfirst($entityName) . '.php';
    
	if(file_exists($entity))
	{
        require_once($entity);
		return true;
	}
	
	return false;
}

spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');

return ComposerAutoloaderInit0c977e1df2b2e0c633b3576051bda18d::getLoader();
