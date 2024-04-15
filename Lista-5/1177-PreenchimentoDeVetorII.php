<?php
// Leitura do valor T
$T = intval(readline());

// Variável para armazenar o número a ser colocado
$numeroColocar = 0;

// Array para armazenar a resposta
$resposta = [];

// Preenchimento do array com números de 0 a T-1 em loop
for ($i = 0; $i < 1000; $i++) {
    // Verifica se o número a ser colocado ultrapassou T-1
    if ($numeroColocar > $T - 1)
        $numeroColocar = 0;

    // Adiciona o número ao array de resposta
    $resposta[] = $numeroColocar++;
}

// Impressão dos valores do array de resposta
foreach ($resposta as $indice => $x)
    echo "N[$indice] = $x\n";
?>
