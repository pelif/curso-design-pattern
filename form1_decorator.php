<?php
require_once "./autoload.php";

use padroes\estruturais\MountHtml\Element;
use padroes\estruturais\MountHtml\Text;
use padroes\estruturais\MountHtml\Button;
use padroes\estruturais\MountHtml\Form;

//Form::formTest();
$form = new Element(array(
    'element' => 'form',
    'action' => 'url.teste.com.br?v=t',
    'method' => 'post',
    'enctype' => 'multipart/form-data'
));

$form->addElement(new Text(array(
    'label' => 'Nome Completo: ',
    'name' => 'nome',
    'size' => '40',
    'maxlength' => '80'
)));
$form->addElement(new Text(array(
    'label' => 'E-mail: ',
    'name' => 'E-mail',
    'size' => '30',
    'maxlength' => '40'
)));
$form->addElement(new Button(array(
    'value' => 'Enviar',
    'id' => 'cadastra'
)));
$form->mount();

?>
