<?php
// Leitura do caractere que indica a operação (S para soma, M para média)
$operacaoChar = readline();

// Inicialização da variável para a operação
$operacao = 0;

// Inicialização da matriz
$matriz = [];

// Preenchimento da matriz com os valores informados
for ($i = 0; $i < 12; $i++)
    for ($j = 0; $j < 12; $j++)
        $matriz[$i][$j] = floatval(readline());

// Realização da operação na parte superior da matriz (triângulo superior)
for ($i = 0; $i < 12; $i++)
    for ($j = $i + 1; $j < 12; $j++)
        $operacao += $matriz[$i][$j];

// Se a operação for média, calcula a média dividindo pela quantidade de elementos no triângulo superior (66)
if ($operacaoChar == 'M')
    $operacao /= 66;

// Impressão do resultado da operação formatado
echo number_format($operacao, 1, '.', '') . "\n";
?>