<?php
namespace padroes\estruturais\MountHtml;

class Form
{
    public static function formTest()
    {
        $form = new Element('form');

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
    }

}




?>
