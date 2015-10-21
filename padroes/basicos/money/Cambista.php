<?php
namespace padroes\basicos\money;

use padroes\basicos\money\Moeda;
use padroes\basicos\money\ServicoDeCambio;

class Cambista
{

  public static function cambiar()
  {
    $m1 = new Moeda("pt_BR");
    $m2 = new Moeda("en_US");

    $m1->setValor(5.60);
    $m2->setValor(2.40);

    $m1->adicionarServicoDeCambio(new ServicoDeCambio());

    try {
      $m3 = $m1->somar($m2);

      echo "\n soma de " . $m1 . ' com ' . $m2 . ' eh igual a ' . $m3 . "\n";
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

}
