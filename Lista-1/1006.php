<?php

// Lê as notas do aluno
$notaA = doubleval(fgets(STDIN));
$notaB = doubleval(fgets(STDIN));
$notaC = doubleval(fgets(STDIN));

// Define os pesos das notas
$pesoA = 2;
$pesoB = 3;
$pesoC = 5;

// Calcula a média ponderada
$media = (($notaA * $pesoA) + ($notaB * $pesoB) + ($notaC * $pesoC)) / ($pesoA + $pesoB + $pesoC);

// Imprime a média com 1 dígito após o ponto decimal
echo "MEDIA = " . number_format($media, 1, '.', '') . "\n";

?>