<?php
/**
* Class para a criação de uma calculadora de impostos
*/
class CalculadorDeImpostos
{
    function realizaCalculo(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}