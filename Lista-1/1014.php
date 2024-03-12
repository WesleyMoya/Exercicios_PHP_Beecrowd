<?php
// Lendo os valores de entrada
$distancia_total = intval(readline());
$total_combustivel = floatval(readline());

// Calculando o consumo médio
$consumo_medio = $distancia_total / $total_combustivel;

// Imprimindo o consumo médio com 3 casas decimais e a mensagem
echo number_format($consumo_medio, 3, '.', '') . " km/l\n";
?>