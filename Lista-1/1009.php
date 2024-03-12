<?php
// Lendo os dados de entrada
$nome_vendedor = readline();
$salario_fixo = floatval(readline());
$total_vendas = floatval(readline());

// Calculando a comissão (15% das vendas)
$comissao = $total_vendas * 0.15;

// Calculando o total a receber (salário fixo + comissão)
$total_receber = $salario_fixo + $comissao;

// Imprimindo o total a receber com duas casas decimais
echo "TOTAL = R$ " . number_format($total_receber, 2, '.', '') . "\n";
?>