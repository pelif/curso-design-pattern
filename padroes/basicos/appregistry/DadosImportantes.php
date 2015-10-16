<?php
namespace padroes\basicos\appregistry;

class DadosImportantes
{
    public static function recoveryDate(\DateTime $data)
    {
        print_r($data); die();
        $data->format("d/m/Y H:s:i");
        Registry::getInstance()->set('data_hoje', $data);
    }

}
