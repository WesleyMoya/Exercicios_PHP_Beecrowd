<?php

$maiorValor = PHP_INT_MIN;
$posicao = -1;

for ($i = 1; $i <= 100; $i++) {
    $valor = intval(fgets(STDIN));
    if ($valor > $maiorValor) {
        $maiorValor = $valor;
        $posicao = $i;
    }
}

echo "$maiorValor\n";
echo "$posicao\n";

?>