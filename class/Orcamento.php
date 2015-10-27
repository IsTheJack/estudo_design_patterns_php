<?php
/**
* Classe para criação de orçamentos
*/
class Orcamento
{
    private $produtos = [];

    function __construct(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function getValor()
    {
        $total = 0;
        foreach ($this->produtos as $produto)
            $total += $produto->getValor();
        return $total;
    }

    public function addItem(Produto $produto)
    {
    	$this->produtos[] = $produto;
    }

    public function getItens()
    {
    	return $this->produtos;
    }
}