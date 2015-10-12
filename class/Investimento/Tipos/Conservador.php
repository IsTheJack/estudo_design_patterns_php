<?php
namespace Investimento\Tipos
{
    /**
    * Classe para tipo de investimento Conservador
    */
    class Conservador implements \TipoInvestimento
    {
        public function calcula(\Investimento\ContaBancaria $conta)
        {
            return $conta->getSaldo() * 0.008;
        }
    }
}