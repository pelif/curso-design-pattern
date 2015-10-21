<?php
use padroes\web\templateview\View;

require_once './autoload.php';

$view = new View();
$view->setPath('padroes/web/templateview');
$view->matricula = '9201837465';
$view->nome = 'Rolando Lero';
$view->render('templateview01');
