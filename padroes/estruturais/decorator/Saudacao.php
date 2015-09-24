<?php
namespace padroes\estruturais\decorator;

class Saudacao implements ICarta
{
  public function montar()
  {
    echo "Saudação testes...<br><br><hr>";
  }
}
