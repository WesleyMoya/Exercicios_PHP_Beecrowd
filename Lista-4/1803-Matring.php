<?php
// Inicialização do array para armazenar as entradas
$entradas = [];

// Leitura das entradas
array_push($entradas, readline());
array_push($entradas, readline());
array_push($entradas, readline());
array_push($entradas, readline());

// Inicialização do array para armazenar os valores de cada coluna
$valoresColuna = [];

// Cálculo dos valores de cada coluna
for ($i = 0; $i < strlen($entradas[0]); $i++) {
    $f = intval($entradas[0][$i]) * 1000;
    $f += intval($entradas[1][$i]) * 100;
    $f += intval($entradas[2][$i]) * 10;
    $f += intval($entradas[3][$i]);
    $valoresColuna[] = $f;
}

// Impressão dos resultados
for ($i = 1; $i < count($valoresColuna) - 1; $i++) {
    echo chr(($valoresColuna[0] * $valoresColuna[$i] + $valoresColuna[count($valoresColuna) - 1]) % 257);
}

// Nova linha para finalizar a saída
echo "\n";
?>