<?php
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
    'dbname' => 'as_1e3b9273989bc6e',
    'user' => 'b6b7f8d99c76f5',
    'password' => '2b9895e9',
    'host' => 'eu-cdbr-azure-north-c.cloudapp.net',
    'driver' => 'pdo_mysql',
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
$config->addEntityNamespace('', 'entities');
//$config = $entityManager->getConfiguration();

echo("config called");