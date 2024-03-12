<?php
// Lendo o raio da esfera
$raio = floatval(readline());

// Definindo o valor de pi
$pi = 3.14159;

// Calculando o volume da esfera
$volume = (4.0/3) * $pi * pow($raio, 3);

// Imprimindo o volume com 3 casas decimais
echo "VOLUME = " . number_format($volume, 3, '.', '') . "\n";
?>