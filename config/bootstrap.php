<?php
// config/boostrap.php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once 'vendor/autoload.php';

//Create a simple "default" Doctrine ORM configuration for Atributes
$config = ORM::createAttributeMetadataConfiguration(
  paths: [__DIR__ '/src'],
  isDevMode: true,
);

// or if you prefer XML
// $config = ORMSetup::createXMLMetadataConfiguration(
//    paths: [__DIR__ . '/config/xml'],
//    isDevMode: true,
//);

//configuring the database conection | I use WAMP 32bits
$connection = DriverManager::getConnection([
  'dbname'    => 'tutorialdoctrine',
  'user'      => 'root',
  'password'  => '',
  'host'      => 'localhost',
  'driver'    => 'pdo_mysql',
], $config);

//obtain the Entity Manager
$entityManager = new EntityManager($connection, $config);

?>
