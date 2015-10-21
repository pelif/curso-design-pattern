<?php
use padroes\orm\datagateway\ManipuladorDeAlunos;

require_once 'autoload.php';

$mda = new ManipuladorDeAlunos();

$mda->criarAlunosAleatoriamente();
