<?php
$positivos = 0;
$somaPositivos = 0;

for ($i = 0; $i < 6; $i++) {
    $valor = floatval(fgets(STDIN));
    if ($valor > 0) {
        $positivos++;
        $somaPositivos += $valor;
    }
}

echo "$positivos valores positivos\n";
echo number_format($somaPositivos / $positivos, 1, '.', '') . "\n";

?>