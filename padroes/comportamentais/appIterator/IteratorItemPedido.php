<?php

namespace padroes\comportamentais\appIterator;

use padroes\comportamentais\appIterator\ItemPedido;
use \Iterator as Iterator;

class IteratorItemPedido implements Iterator
{

    private $itens = array();
    private $key = 0;

    public function add(ItemPedido $item)
    {
        $this->itens[] = $item;
    }

    public function remove($key)
    {
        unset($this->itens[$key]);
    }

    public function current()
    {
        return $this->itens[$this->key];
    }

    public function next()
    {
        $this->key++;
    }

    public function key()
    {
        return $this->key;
    }

    public function valid()
    {
        return (isset($this->itens[$this->key]));
    }

    public function rewind()
    {
        $this->key = 0;
    }
    
}
