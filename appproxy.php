<?php
require_once "./autoload.php";

use padroes\estruturais\appProxy\Record;
use padroes\estruturais\appProxy\RecordProxy;

$obj = new RecordProxy($nome='caraka');
$obj->nome = 'teste ';
$obj->teste01 = 'teste 01';
$obj->teste02 = 'teste 02';
$obj->teste03 = 'teste 03';

print $obj->teste01;

var_dump($obj);


 ?>
