<?php
require_once 'autoload.php';

use padroes\criacao\factory\AbstractDatabaseConnection;

$properties = array(
    'adapter' => 'sqlite',
    'username' => 'root',
    'password' => 'myrootsql',
    'dbname' => 'teste',
    'host' => 'localhost',
    'port' => '3306'
);

$connection = AbstractDatabaseConnection::factory($properties);

echo get_class($connection);
