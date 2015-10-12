<?php
namespace Investimento\Tipos
{
    /**
    * Classe para tipo de investimento Arrojado
    */
    class Arrojado implements \TipoInvestimento
    {
        public function calcula(\Investimento\ContaBancaria $conta)
        {
            $chance = mt_rand(1,100);
            if($chance <= 20)
                return $conta->getSaldo() * 0.05;
            elseif($chance <= 50)
                return $conta->getSaldo() * 0.03;
            else
                return $conta->getSaldo() * 0.006;
        }
    }
}