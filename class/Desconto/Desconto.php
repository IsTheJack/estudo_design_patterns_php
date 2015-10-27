<?php
namespace Desconto;

/**
* Classe abstrata pro desconto
*/
abstract class Desconto
{
	protected $orcamento;
	protected $proximo;

	function __construct(\Orcamento $orcamento)
	{
		$this->orcamento = $orcamento;
	}

	public function setProximo(Desconto $desconto)
	{
		$this->proximo = $desconto;
		return $desconto;
	}

	public function getOrcamento()
	{
		return $this->orcamento;
	}

	abstract public function validaDesconto();
}