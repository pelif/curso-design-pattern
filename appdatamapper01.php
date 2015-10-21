<?php

use padroes\orm\datamapper\Db;
use padroes\orm\datamapper\AlunoMapper;
use padroes\orm\datagateway\Aluno;

require_once('./autoload.php');

/*
$aluno = new Aluno();
$aluno->setId(14);
$aluno->setNome("UPGRADE TEST OF JOB");
$aluno->setEndereco("R. ALCANTARA MACHADO, 122255");
$aluno->setTelefone("(11) 8779-6545");
$aluno->setCidade("SÃO PAULO");
*/

$dtmapper = new AlunoMapper(Db::getInstance());

var_dump($dtmapper->fetchAll());

?>
