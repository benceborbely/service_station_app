<?php
 
require_once 'autoload.php';
 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
 
$paths = array("/entities");
$isDevMode = false;
 
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'service_station',
    'host'     => '127.0.0.1',
    'port'     => '3306',
	'charset' => 'utf8',
    'driverOptions' => array(
        1002=>'SET NAMES utf8'
    )
);
 
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$evm = new Doctrine\Common\EventManager();
$entityManager = \Doctrine\ORM\EntityManager::create($dbParams, $config, $evm);
