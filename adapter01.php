<?php

require_once 'autoload.php';

use padroes\estruturais\adapter\RelationalEntity as RelationalEntity;
//use padroes\estruturais\adapter\Record as Record;
use padroes\estruturais\adapter\DocumentEntity as DocumentEntity;
use padroes\estruturais\adapter\PersistenceManager as PersistenceManager;
use padroes\estruturais\adapter\DocumentManager as DocumentManager;

$Adapter = new PersistenceManager();

$adapterDoc = new DocumentManager();

$relational = new RelationalEntity();
@$relational->setStorageStructure('relational');


$doc = new DocumentEntity();
@$doc->setStorageStructure('document');

//@$Adapter->save($relational);
@$Adapter->save($doc);


?>
