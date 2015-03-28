<?php
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or annotations
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
//$conn = array(
//    'driver' => 'pdo_mysql',
//    //'path' => 'Database=as_1e3b9273989bc6e;Data Source=eu-cdbr-azure-north-c.cloudapp.net;User Id=b6b7f8d99c76f5;Password=2b9895e9',
//);

//$dsn = 'mysql:dbname=as_1e3b9273989bc6e;host=eu-cdbr-azure-north-c.cloudapp.net';
//$user = 'b6b7f8d99c76f5';
//$password = '2b9895e9';
//
//$dbh = new PDO($dsn, $user, $password);
//$conn = Doctrine_Manager::connection($dbh);


//$conn = Doctrine_Manager::connection('Database=as_1e3b9273989bc6e;Data Source=eu-cdbr-azure-north-c.cloudapp.net;User Id=b6b7f8d99c76f5;Password=2b9895e9');

        




//$config = new \Doctrine\DBAL\Configuration();

$conn = array(
    'dbname' => 'as_1e3b9273989bc6e',
    'user' => 'b6b7f8d99c76f5',
    'password' => '2b9895e9',
    'host' => 'eu-cdbr-azure-north-c.cloudapp.net',
    'driver' => 'pdo_mysql',
);



// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

