<?php
namespace padroes\comportamentais\strategy;

use padroes\comportamentais\strategy\ImpostoInterface;

class EstrategiaDeCalculo implements ImpostoInterface
{

  public function calcular($renda)
  {
    $calculador = new ImpostoClasseA();

    if ($this->estaEntre($renda, 0, 1000))
      $calculador = new ImpostoClasseB();

    if ($this->estaEntre($renda, 1001, 2000))
      $calculador = new ImpostoClasseC();

    if ($this->estaEntre($renda, 2001, 3000))
      $calculador = new ImpostoClasseD();

    return $calculador->calcular($renda);
  }

  private function estaEntre($valor, $valor1, $valor2)
  {
    if ($valor >= $valor1 && $valor <= $valor2)
    {
      return true;
    }
    return false;
  }

}
