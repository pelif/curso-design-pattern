<?php

namespace padroes\estruturais\appadapter;

class Facebook
{
    public function __construct() { }

    public function SendMsg($messenger)
    {
        printf("%s", $messenger);
    }
}

 ?>
