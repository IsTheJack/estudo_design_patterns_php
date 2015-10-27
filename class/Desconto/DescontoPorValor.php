<?php
namespace Desconto;

/**
* Essa classe oferece desconto por quantidade de itens
*/
class DescontoPorValor extends \Desconto\Desconto
{
	public function validaDesconto()
	{
		if ($this->orcamento->getValor() > 500)
			return $this->orcamento->getValor() * 0.07;
		else
			return $this->proximo->validaDesconto();
	}
}