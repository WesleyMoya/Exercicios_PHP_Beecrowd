<?php
// Definição da função para ordenar os códigos
function ordenarCodigos($codigos)
{
    asort($codigos); // Ordena o array em ordem crescente e mantém suas chaves
    return $codigos;
}

// Loop de leitura dos casos
while ($n = intval(fgets(STDIN))) {
    $codigos = [];
    
    // Leitura e armazenamento dos códigos
    for ($i = 0; $i < $n; $i++) {
        $codigo = trim(fgets(STDIN));
        $codigos[$codigo] = $codigo; // Usando o próprio código como chave e valor
    }
    
    // Chamada da função para ordenar os códigos
    $codOrdenado = ordenarCodigos($codigos);
    
    // Impressão dos códigos ordenados
    foreach ($codOrdenado as $codigo)
        echo $codigo . "\n";
}
?>