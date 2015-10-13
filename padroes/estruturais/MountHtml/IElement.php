<?php
namespace padroes\estruturais\MountHtml;

interface IElement
{
    //public function addProperties(array $propertie);
    public function __construct(array $propperties = null);
    public function mount();
}


?>
