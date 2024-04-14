<?php
// Leitura do número de casos
$quantidadeCasos = intval(readline());

// Processamento para cada caso
while ($quantidadeCasos--) {
    // Inicialização da string espelho
    $espelho = "";
    
    // Leitura dos valores A e B
    list($A, $B) = explode(" ", readline());
    
    // Construção da parte crescente do espelho
    while ($B >= $A)
        $espelho .= $A++;
    
    // Adição da parte reversa do espelho
    $espelho .= strrev($espelho); // Reverte a string
    
    // Impressão do espelho
    echo "$espelho\n";
}
?>