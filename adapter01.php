<?php

require_once 'autoload.php';

use padroes\estruturais\adapter\RelationalEntity as RelationalEntity;
use padroes\estruturais\adapter\DocumentEntity as DocumentEntity;
use padroes\estruturais\adapter\PersistenceManager as PersistenceManager;

$Adapter = new PersistenceManager();
$relational = new RelationalEntity();

$Adapter->save($relational);
echo "<pre>";print_r($Adapter);

$Adapter02 = new PersistenceManager();
?>