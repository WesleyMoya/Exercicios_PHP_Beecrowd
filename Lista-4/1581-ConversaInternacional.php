<?php
// Leitura do número de casos
$quantidadeCasos = intval(readline());

// Processamento para cada caso
for ($i = 0; $i < $quantidadeCasos; $i++) {
    // Leitura do número de entradas
    $numEntradas = intval(readline());
    
    // Inicialização do array para armazenar as línguas
    $linguas = [];
    
    // Leitura das línguas
    for ($c = 0; $c < $numEntradas; $c++)
        array_push($linguas, readline());
    
    // Verificação se há mais de uma língua presente
    if (count(array_unique($linguas)) != 1) // Remove valores duplicados de um array
        echo "ingles\n"; // Se houver mais de uma língua, imprime "ingles"
    else
        echo $linguas[0] . "\n"; // Caso contrário, imprime a única língua presente
}
?>