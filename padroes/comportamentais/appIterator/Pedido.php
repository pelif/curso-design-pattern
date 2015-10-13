<?php
namespace padroes\comportamentais\appIterator;

use padroes\comportamentais\appIterator\ItemPedido;
use ArrayIterator;

class Pedido
{
    public static function processaPedido()
    {
        $itens  = new ArrayIterator();

        for($i=0; $i < 6; $i++)
        {
            $itens->append(New ItemPedido());
        }

        foreach($itens as $item)
        {
            $item->imprimePrecoFinal();
        }

    }

}
