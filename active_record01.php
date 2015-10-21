<?php
use padroes\orm\datamapper\AlunoMapper;
use padroes\orm\activerecord\AlunoModel;
use padroes\orm\datamapper\Db;

require_once 'autoload.php';

$model = new AlunoModel(new AlunoMapper(Db::getInstance()));

$model->setNome('GRAZIELA MICHAEL OLIVEIRA');
$model->setEndereco('R. FLEURY FILHO, 1000');
$model->setTelefone('(11) 6789-1234');
$model->setCidade('ALAGOINHA');
$model->save();

echo "\nRegistro inserido.\n\n";
