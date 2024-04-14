<?php
// Loop infinito para processar múltiplos casos
while (true) {
    // Leitura da string R
    $stringR = readline();

    // Verificação se a leitura falhou (indica fim da entrada)
    if ($stringR === false)
        break;

    // Leitura do valor P
    $valorP = intval(readline());

    // Substituição das repetições de 'R' por 'W' no número de vezes especificado em P
    for ($i = $valorP; $i > 0; $i--) {
        $stringR = str_replace(str_repeat('R', $i), 'W', $stringR);
    }

    // Impressão do comprimento da string resultante
    echo strlen($stringR) . "\n";
}
?>