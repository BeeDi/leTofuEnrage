<?php
use Doctrine\ORM\Tools\Setup as caca;
require_once 'Doctrine/ORM/Tools/Setup.php';
require_once __DIR__.'/src/Entities/Dish.php';
caca::registerAutoloadPEAR();

$config = caca::createAnnotationMetadataConfiguration(array(__DIR__.'/src/Entities/'), true);
$conn_params = array(
	'driver' => 'pdo_mysql',
	'host' => 'localhost',
	'dbname' => 'lte',
	'user' => 'lte',
	'password' => 'mooseburger',
	);

$entityManager = \Doctrine\ORM\EntityManager::create($conn_params, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));

