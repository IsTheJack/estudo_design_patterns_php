<?php
/**
* Classe para o imposto ICMS
*/
class ICMS implements Imposto
{
    private $taxa = 0.05;
    private $valorFixo = 50;

    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * $this->taxa + $this->valorFixo;
    }
}