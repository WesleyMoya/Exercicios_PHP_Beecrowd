<?php
//Ler o valor inteiro N
$idade_dias = intval(readline());

//Calcular anos, meses e dias
$anos = intval($idade_dias / 365);
$idade_dias %= 365;
$meses = intval($idade_dias / 30);
$dias = $idade_dias % 30;

//Imprimir a idade da pessoa em anos, meses e dias
echo $anos . " ano(s)\n";
echo $meses . " mes(es)\n";
echo $dias . " dia(s)\n";
?>