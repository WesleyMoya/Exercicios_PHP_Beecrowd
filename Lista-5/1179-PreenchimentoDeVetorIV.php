<?php
// Array para armazenar números pares
$pares = [];

// Array para armazenar números ímpares
$impares = [];

// Loop para ler 15 números
for ($i = 0; $i < 15; $i++) {
    // Leitura do número
    $entrada = intval(fgets(STDIN));

    // Verificação se o número é par ou ímpar e armazenamento nos arrays correspondentes
    if ($entrada % 2 == 0)
        $pares[] = $entrada;
    else
        $impares[] = $entrada;

    // Verificação se o array de números pares atingiu o tamanho máximo (5)
    if (count($pares) == 5) {
        // Impressão dos números pares
        foreach ($pares as $indice => $num)
            echo "par[$indice] = $num\n";

        // Limpeza do array de números pares
        $pares = [];
    }

    // Verificação se o array de números ímpares atingiu o tamanho máximo (5)
    if (count($impares) == 5) {
        // Impressão dos números ímpares
        foreach ($impares as $indice => $num)
            echo "impar[$indice] = $num\n";

        // Limpeza do array de números ímpares
        $impares = [];
    }
}

// Impressão dos números ímpares restantes, caso existam
if (count($impares) != 0) {
    foreach ($impares as $indice => $num)
        echo "impar[$indice] = $num\n";
}

// Impressão dos números pares restantes, caso existam
if (count($pares) != 0) {
    foreach ($pares as $indice => $num)
        echo "par[$indice] = $num\n";
}
?>