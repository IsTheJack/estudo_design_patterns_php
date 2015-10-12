<?php
namespace Investimento;
/**
* Classes de exemplo para construção de contas banárias
*/
class ContaBancaria
{
    private $saldo;

    function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}