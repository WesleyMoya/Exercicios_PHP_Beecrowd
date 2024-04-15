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

// Realização da operação na região à esquerda da diagonal principal (triângulo inferior à direita)
$comeco = 1;
$fim = 11;
for ($j = 0; $j < 5; $j++) {
    for ($i = $comeco; $i < $fim; $i++)
        $operacao += $matriz[$i][$j];
    $comeco += 1;
    $fim -= 1;
}

// Se a operação for média, calcula a média dividindo pela quantidade de elementos na região à esquerda da diagonal principal (30)
if ($operacaoChar == 'M')
    $operacao /= 30;

// Impressão do resultado da operação formatado
echo number_format($operacao, 1, '.', '') . "\n";
?>