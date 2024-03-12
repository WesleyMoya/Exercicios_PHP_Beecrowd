<?php

// Lê o salário
$salario = floatval(readline());

// Calcula o imposto de renda
$imposto = 0.0;

if ($salario <= 2000.00) {
    $imposto = 0.0;
} elseif ($salario <= 3000.00) {
    $imposto = ($salario - 2000.00) * 0.08;
} elseif ($salario <= 4500.00) {
    $imposto = 1000.00 * 0.08 + ($salario - 3000.00) * 0.18;
} else {
    $imposto = 1000.00 * 0.08 + 1500.00 * 0.18 + ($salario - 4500.00) * 0.28;
}

// Verifica se o imposto é igual a zero (isento)
if ($imposto == 0.0) {
    echo "Isento\n";
} else {
    // Formata e imprime o valor do imposto
    echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
}

?>