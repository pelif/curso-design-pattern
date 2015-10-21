<?php
ini_set('error_reporting', E_ALL);
require_once "./autoload.php";

session_start();
$_SESSION['id'] = 562;
$_SESSION['name'] = "Name User Test";
$_SESSION['nick'] = "usrpy";
$_SESSION['permission'] = "director";

use padroes\basicos\appregistry\Registry;
use padroes\basicos\appregistry\SessionsSystem;
use padroes\basicos\appregistry\DadosImportantes;
use padroes\basicos\appregistry\DadosUser;

SessionsSystem::registerSessions(new DadosUser());

Registry::getInstance()->get('dados_user');

DadosImportantes::recoveryDate(new \DateTime());

//var_dump(Registry::getInstance->get('data_hoje'));
?>
