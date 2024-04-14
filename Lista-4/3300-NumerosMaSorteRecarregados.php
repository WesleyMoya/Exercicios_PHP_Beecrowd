<?php
// Leitura do número
$numero = readline();

// Verificação se o número contém o dígito '13'
if (strstr($numero, '13'))
    echo "$numero es de Mala Suerte\n"; // Exibir mensagem se o número contém '13'
else
    echo "$numero NO es de Mala Suerte\n"; // Exibir mensagem se o número não contém '13'
?>
