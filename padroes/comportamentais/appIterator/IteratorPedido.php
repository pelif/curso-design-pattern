<?php
namespace padroes\comportamentais\appIterator;

use padroes\comportamentais\appIterator\IteratorItemPedido;

class IteratorPedido
{
    public static function processaPedidos()
    {
        $pedidos = new IteratorItemPedido();

        for($i=0; $i<5; $i++)
        {
            $pedidos->add(new ItemPedido());
        }

        foreach($pedidos as $pedido)
        {
            $pedido->imprimePrecoFinal();
        }
    }
}
