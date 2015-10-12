<?php
namespace Investimento
{
    /**
    * Classe para investimentos utilizando Pattern Strategy
    */
    class RealizadorDeInvestimentos
    {
        private $conta;
        private $impostoSobreLucro = 0.25;

        function __construct(ContaBancaria $conta)
        {
            $this->conta = $conta;
        }

        public function calculaInvestimentos(\TipoInvestimento $tipo)
        {
            $investimentoBruto = $tipo->calcula($this->conta);
            return $investimentoBruto - ($investimentoBruto * $this->impostoSobreLucro);
        }
    }
}