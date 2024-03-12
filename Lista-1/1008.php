<?php
// Lendo os dados de entrada
$numero_funcionario = intval(fgets(STDIN));
$horas_trabalhadas = intval(fgets(STDIN));
$valor_por_hora = floatval(fgets(STDIN));

// Calculando o salário
$salario = $horas_trabalhadas * $valor_por_hora;

// Imprimindo o número e o salário formatados sem ponto de milhar
echo "NUMBER = $numero_funcionario\n";
echo "SALARY = U$ ".number_format($salario, 2, '.', '')."\n";
?>