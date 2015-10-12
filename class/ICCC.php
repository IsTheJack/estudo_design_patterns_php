<?php
/**
* Classe para o imposto ICCC
*/
class ICCC implements Imposto
{
    private $taxa = [0.05, 0.07, 0.08];

    public function calcula(Orcamento $orcamento)
    {
        $valor = $orcamento->getValor();

        if ($valor < 1000)
            $taxa = $this->taxa[0];
        elseif ($valor <= 3000)
            $taxa = $this->taxa[1];
        elseif ($valor > 3000)
            $taxa = $this->taxa[2];

        return $orcamento->getValor() * $taxa;
    }
}