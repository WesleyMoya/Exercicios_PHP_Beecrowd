<?php
// Leitura do número de entradas
$quantidadeEntradas = intval(readline());

// Verificação de cada entrada
for ($i = 0; $i < $quantidadeEntradas; $i++) {
    // Leitura da entrada
    $entrada = readline();
    
    // Verificação se a entrada contém três ou mais consoantes consecutivas
    if (preg_match('/[bcdfghjklmnpqrstvwxyz]{3}/i', $entrada))
        echo "$entrada nao eh facil\n"; // Exibir mensagem se a entrada contém três ou mais consoantes consecutivas
    else
        echo "$entrada eh facil\n"; // Exibir mensagem se a entrada não contém três ou mais consoantes consecutivas
}
?>
