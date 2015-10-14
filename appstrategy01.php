<?php
require_once "./autoload.php";

use padroes\comportamentais\strategy\Imposto;
use padroes\comportamentais\strategy\EstrategiaDeCalculo;

$result = Imposto::calcular(3000);

print "\nValor com Imposto de Renda R$: " . $result['valor_recalculado'];
print "\nPorcentagem de desconto: " . $result['percentual'];
print "\nValor descontado: " . $result['valor_descontado'];
print "\nValor Bruto: " . $result['valor_bruto'];
print "\n";


?>
