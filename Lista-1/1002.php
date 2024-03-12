<?php

// Constante π
define("PI", 3.14159);

// Lê o valor do raio
$raio = doubleval(fgets(STDIN));

// Calcula a área da circunferência
$area = PI * pow($raio, 2);

// Imprime o resultado com 4 casas decimais
echo "A=" . number_format($area, 4, '.', '') . "\n";

?>