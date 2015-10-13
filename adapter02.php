<?php

require_once 'autoload.php';

use padroes\estruturais\adapter\RelationalEntity as RelationalEntity;
//use padroes\estruturais\adapter\Record as Record;
use padroes\estruturais\adapter\DocumentEntity as DocumentEntity;
use padroes\estruturais\adapter\PersistenceManager as PersistenceManager;

$Adapter = new PersistenceManager();

$doc = new DocumentEntity();
@$doc->setStorageStructure('document');

@$Adapter->save($doc);


?>
