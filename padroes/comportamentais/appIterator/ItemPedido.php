<?php
namespace padroes\comportamentais\appIterator;

class ItemPedido
{
    private $preco;
    private $preco_final;
    const TAXA = 1.15;

    public function __construct()
    {
        $this->preco = rand(5, 1500);
    }

    public function imprimePrecoFinal()
    {
        $this->calculaTaxa();
        print $this->preco_final . "\n";
    }

    private function calculaTaxa()
    {
        $this->preco_final = $this->preco * self::TAXA;
    }


}
