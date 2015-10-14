<?php
namespace padroes\comportamentais\strategy;

use padroes\comportamentais\strategy\ImpostoInterface;

class ImpostoClasseC implements ImpostoInterface
{
    public function calcular($valor)
    {
        $valor_recalculado = $valor - ($valor * 10 / 100);
        $percent = $valor * 10 / 100;
        return array(
            'valor_recalculado' => $valor_recalculado,
            'percentual' => '10%',
            'valor_descontado' => $percent,
            'valor_bruto' => $valor
        );
    }
}
