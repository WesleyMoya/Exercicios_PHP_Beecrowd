<?php

// Lê as notas do aluno
$notaA = doubleval(fgets(STDIN));
$notaB = doubleval(fgets(STDIN));

// Define os pesos das notas
$pesoA = 3.5;
$pesoB = 7.5;

// Calcula a média ponderada
$media = (($notaA * $pesoA) + ($notaB * $pesoB)) / ($pesoA + $pesoB);

// Imprime a média com 5 dígitos após o ponto decimal, com a separação de casas decimais sendo . e de numeros milhares nada
echo "MEDIA = " . number_format($media, 5, '.', '') . "\n";

?>