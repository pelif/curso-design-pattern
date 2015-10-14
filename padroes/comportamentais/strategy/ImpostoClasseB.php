<?php
namespace padroes\comportamentais\strategy;

use padroes\comportamentais\strategy\ImpostoInterface;

class ImpostoClasseB implements ImpostoInterface
{
    public function calcular($valor)
    {
        $valor_recalculado =  $valor - ($valor * 8.5 / 100);
        $percent = $valor * 8.5 / 100;

        return array(
            'valor_recalculado' => $valor_recalculado,
            'percentual' => '8,5%',
            'valor_descontado' => $percent;
            'valor_bruto' => $valor
        );
    }
}
