<?php
// Leitura do número de casos
$quantidadeCasos = intval(readline());

// Processamento para cada caso
while ($quantidadeCasos--) {
    // Leitura do número como uma sequência de caracteres
    $numero = str_split(readline());
    
    // Verificação das possíveis condições para identificar o número
    if (($numero[0] == 'o' && $numero[1] == 'n') || ($numero[0] == 'o' && $numero[2] == 'e') || ($numero[1] == 'n' && $numero[2] == 'e'))
        echo "1\n"; // Caso seja 'one' ou 'one' ou 'neo', imprime 1
    elseif (($numero[0] == 't' && $numero[1] == 'w') || ($numero[0] == 't' && $numero[2] == 'o') || ($numero[1] == 'w' && $numero[2] == 'o'))
        echo "2\n"; // Caso seja 'two' ou 'two' ou 'wto', imprime 2
    else
        echo "3\n"; // Caso contrário, imprime 3
}
?>