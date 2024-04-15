<?php
// Leitura do número da linha a ser considerada
$linhaConsiderada = intval(readline());

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

// Realização da operação na linha considerada
foreach ($matriz[$linhaConsiderada] as $numero)
    $operacao += $numero;

// Se a operação for média, calcula a média dividindo pela quantidade de elementos (12)
if ($operacaoChar == 'M')
    $operacao /= 12;

// Impressão do resultado da operação formatado
echo number_format($operacao, 1, '.', '') . "\n";
?>