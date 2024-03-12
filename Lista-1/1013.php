<?php
// Lendo os valores de entrada
list($a, $b, $c) = sscanf(readline(), "%d %d %d");

// Encontrando o maior entre a e b
$maior_ab = ($a + $b + abs($a - $b)) / 2;

// Encontrando o maior entre o maior de a e b e c
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

// Imprimindo o maior valor seguido da mensagem
echo $maior . " eh o maior\n";
?>