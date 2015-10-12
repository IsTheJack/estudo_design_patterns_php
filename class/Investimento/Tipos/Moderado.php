<?php
namespace Investimento\Tipos
{
    /**
    * Classe para tipo de investimento Moderado
    */
    class Moderado implements \TipoInvestimento
    {
        public function calcula(\Investimento\ContaBancaria $conta)
        {
            $chance = mt_rand(1,100);
            if($chance <= 50)
                return $conta->getSaldo() * 0.025;
            else
                return $conta->getSaldo() * 0.007;
        }
    }
}