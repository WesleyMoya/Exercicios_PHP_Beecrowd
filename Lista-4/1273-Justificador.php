<?php
// Leitura do número inicial de entradas
$N = intval(readline());

// Loop para processar cada caso
while (true) {
    // Verificação se o número de entradas é zero, indicando o fim da entrada
    if ($N == 0)
        break;

    // Inicialização da string resposta
    $resposta = "";

    // Inicialização do array para armazenar as entradas
    $entradas = [];

    // Leitura das entradas
    for ($i = 0; $i < $N; $i++) {
        array_push($entradas, readline());
    }

    // Encontrar o comprimento da linha mais longa
    $maior = 0;
    foreach ($entradas as $linha) {
        if (strlen($linha) > $maior)
            $maior = strlen($linha);
    }

    // Preencher as linhas com espaços para que todas tenham o mesmo comprimento
    foreach ($entradas as $linha) {
        $linha = str_pad($linha, $maior, " ", STR_PAD_LEFT); // Preenche os espaços restantes da string com espaços para a esquerda
        echo $linha . "\n";
    }

    // Leitura do próximo número de entradas
    $N = intval(readline());

    // Verificação se o próximo número de entradas é zero
    // Se não for, imprime uma linha em branco
    if ($N != 0)
        echo "\n";
}
?>