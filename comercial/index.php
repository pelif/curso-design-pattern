<?php

use library\controller\FrontController;
use library\db\factory\Db;
use library\orm\Mapper;
use library\util\Autoloader;



set_include_path(__DIR__ . PATH_SEPARATOR . get_include_path());




require 'library/util/Autoloader.php';


$autoloader = Autoloader::getInstance();



spl_autoload_register(array($autoloader, 'autoload'));

$config = parse_ini_file('config.ini');


$adapter = Db::getFactory($config)->factory();

Mapper::$defaultAdapter = $adapter;

$frontController = FrontController::getInstance();
$frontController->setPath(__DIR__ . DIRECTORY_SEPARATOR . 'application' .
    DIRECTORY_SEPARATOR . 'view');

$frontController->dispatch();
*/

?>
