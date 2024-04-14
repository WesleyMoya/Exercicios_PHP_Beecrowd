<?php
// Leitura do número de entradas
$quantidadeNomes = intval(readline());

// Array associativo para armazenar os nomes agrupados por letra inicial
$nomesPorLetra = [
    'a' => [], 'b' => [], 'c' => [], 'd' => [], 'e' => [], 'f' => [], 'g' => [], 'h' => [], 'i' => [],
    'j' => [], 'k' => [], 'l' => [], 'm' => [], 'n' => [], 'o' => [], 'p' => [], 'q' => [], 'r' => [],
    's' => [], 't' => [], 'u' => [], 'v' => [], 'w' => [], 'x' => [], 'y' => [], 'z' => []
];

// Leitura dos nomes e agrupamento por letra inicial
for ($i = 0; $i < $quantidadeNomes; $i++) {
    $nome = readline();
    $letraInicial = strtolower(substr($nome, 0, 1));
    array_push($nomesPorLetra[$letraInicial], $nome);
}

// Impressão dos nomes agrupados por letra inicial
foreach ($nomesPorLetra as $nomesIniciais) {
    if (!empty($nomesIniciais)) {
        foreach ($nomesIniciais as $nome) {
            echo "$nome\n";
        }
    }
}
?>
