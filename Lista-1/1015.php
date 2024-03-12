<?php
// Lendo os valores de entrada
list($x1, $y1) = sscanf(readline(), "%f %f");
list($x2, $y2) = sscanf(readline(), "%f %f");

// Calculando a distância entre os pontos
$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

// Imprimindo a distância com 4 casas decimais após a vírgula
echo number_format($distancia, 4, '.', '') . "\n";
?>
