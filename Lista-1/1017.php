<?php

// Cálculo da distância percorrida
$tempo = readline("Digite o tempo gasto na viagem (em horas): ");
$velocidade = readline("Digite a velocidade média durante a viagem (em km/h): ");
$distancia = $tempo * $velocidade;

// Cálculo da quantidade de litros de combustivel
$litros = $distancia / 12;

// Exibição do resultado
echo number_format($litros, 3) . PHP_EOL;

?>