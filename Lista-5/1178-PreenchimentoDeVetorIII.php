<?php
// Leitura do valor de X
$X = doubleval(readline());

// Array para armazenar a resposta
$resposta = [];

// Preenchimento do array com os valores de X divididos por 2 em loop
for ($i = 0; $i < 100; $i++) {
    $resposta[] = $X;
    $X /= 2;
}

// Impressão dos valores do array de resposta
foreach ($resposta as $indice => $x)
    echo "N[$indice] = " . number_format($x, 4, '.', '') . "\n";
?>