<?php
require_once "./autoload.php";

use padroes\estruturais\MountHtml\Element;
use padroes\estruturais\MountHtml\Text;
use padroes\estruturais\MountHtml\Button;
use padroes\estruturais\MountHtml\Textarea;
use padroes\estruturais\MountHtml\Select;
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

$form->addElement(new Textarea(array(
    'label' => 'Escreva sua mensagem: ',
    'id' => 'mensagem',
    'name' => 'mensagem',
    'cols' => '30',
    'rows' => '12'
)));

$form->addElement(new Select(array(
    'label' => 'Você se interessa por quais categorias de aprendizado : ',
    'name' => 'curso',
    'id' => 'curso',
    'onchange' => 'alert("JS VIA PHP HEIN!!!")',
    'options' => array(
        '01' => 'Design Digital',
        '02' => 'Engenharia de Software',
        '03' => 'Desenvolvimento Web',
        '04' => 'Desenovlvimento Mobile'
    )
)));

$form->addElement(new Button(array(
    'value' => 'Enviar',
    'id' => 'cadastra'
)));


$form->mount();

?>
