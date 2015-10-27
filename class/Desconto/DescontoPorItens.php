<?php
namespace Desconto;

/**
* Essa classe oferece desconto por quantidade de itens
*/
class DescontoPorItens extends \Desconto\Desconto
{
	public function validaDesconto()
	{
		if (count($this->orcamento->getItens()) >= 5)
			return $this->orcamento->getValor() * 0.1;
		else
			return $this->proximo->validaDesconto();
	}
}