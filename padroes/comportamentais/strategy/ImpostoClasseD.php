<?php
namespace padroes\comportamentais\strategy;

use padroes\comportamentais\strategy\ImpostoInterface;

class ImpostoClasseD implements ImpostoInterface
{
    public function calcular($valor)
    {
        $valor_recalculado = $valor - ($valor * 11 / 100);
        $percent = $valor * 11 / 100;
        return array(
            'valor_recalculado' => $valor_recalculado,
            'percentual' => '11%',
            'valor_descontado' => $percent,
            'valor_bruto' => $valor
        );
    }
}
