<?php
namespace padroes\estruturais\decorator;

use padroes\estruturais\decorator\Escritor;
use padroes\estruturais\decorator\DataDaCarta;
use padroes\estruturais\decorator\Saudacao;
use padroes\estruturais\decorator\PostScriptum;
use padroes\estruturais\decorator\Carta;

class Escritor
{
  public static function redigir() {
    $carta = new Carta();

    $carta->addDecorator(new DataDaCarta());
    $carta->addDecorator(new Saudacao());
    $carta->addDecorator(new PostScriptum());
    $carta->montar();
  }
}
