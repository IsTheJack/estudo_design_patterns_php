<?php
namespace Desconto;

/**
* Essa classe oferece desconto por quantidade de itens
*/
class SemDesconto extends \Desconto\Desconto
{
	public function validaDesconto()
	{
		return 0;
	}

	public function setProximo(Desconto $desconto)
	{
		throw new Exception("Não é possível adicionar pŕoximo a uma instancia de SemDesconto", 1);
	}
}