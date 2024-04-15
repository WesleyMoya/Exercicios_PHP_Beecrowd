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
        $matriz[$i][$j] = doubleval(readline());

// Realização da operação na região abaixo da diagonal secundária (triângulo inferior à esquerda)
$inicioColuna = 1;
$fimColuna = 11;
for ($i = 11; $i > 6; $i--) {
    for ($j = $inicioColuna; $j < $fimColuna; $j++)
        $operacao += $matriz[$i][$j];
    $inicioColuna += 1;
    $fimColuna -= 1;
}

// Se a operação for média, calcula a média dividindo pela quantidade de elementos na região abaixo da diagonal secundária (30)
if ($operacaoChar == 'M')
    $operacao /= 30;

// Impressão do resultado da operação formatado
echo number_format($operacao, 1, '.', '') . "\n";
?>