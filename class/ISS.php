<?php
/**
* Classe para o imposto ISS
*/
class ISS implements Imposto
{
    private $taxa = 0.06;

    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * $this->taxa;
    }
}