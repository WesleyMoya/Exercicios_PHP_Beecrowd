<?php
// Lendo os valores de entrada
list($A, $B, $C) = sscanf(readline(), "%f %f %f");

// Calculando as áreas
$area_triangulo = ($A * $C) / 2;
$area_circulo = 3.14159 * pow($C, 2);
$area_trapezio = (($A + $B) * $C) / 2;
$area_quadrado = pow($B, 2);
$area_retangulo = $A * $B;

// Imprimindo as áreas com 3 dígitos após o ponto decimal
echo "TRIANGULO: " . number_format($area_triangulo, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($area_circulo, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($area_trapezio, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($area_quadrado, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($area_retangulo, 3, '.', '') . "\n";
?>
