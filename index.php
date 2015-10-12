<?php
require 'config/load.php';

$conta = new Investimento\ContaBancaria(1000);
$investidor = new Investimento\RealizadorDeInvestimentos($conta);

var_dump($investidor->calculaInvestimentos(new Investimento\Tipos\Arrojado));