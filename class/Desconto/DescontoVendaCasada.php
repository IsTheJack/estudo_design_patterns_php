<?php
namespace Desconto;

/**
* Essa classe oferece desconto por quantidade de itens
*/
class DescontoVendaCasada extends \Desconto\Desconto
{
    public function validaDesconto()
    {
        $temLapis = $this->existe('LAPIS', $this->orcamento);
        $temCaneta = $this->existe('CANETA', $this->orcamento);

        if ($temLapis && $temCaneta)
            return $this->orcamento->getValor() * 0.05;
        else
            return $this->proximo->validaDesconto();
    }

    private function existe($nomeDoItem, \Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item)
            if($item->getNome() == $nomeDoItem) return true;
        return false;
    }
}