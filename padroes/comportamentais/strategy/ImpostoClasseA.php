<?php
namespace padroes\comportamentais\strategy;

use padroes\comportamentais\strategy\ImpostoInterface;

class ImpostoClasseA implements ImpostoInterface
{
    public function calcular($valor)
    {
        $percent = $valor * 15 / 100;
        $valor_recalculado = $valor - ($valor * 15 / 100);

        return array(
                'valor_recalculado' => $valor_recalculado,
                'percentual' => '15%',
                'valor_descontado' => $percent,
                'valor_bruto' => $valor
        );
    }
}
