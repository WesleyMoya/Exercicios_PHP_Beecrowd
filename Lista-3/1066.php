<?php

$pares = 0;
$impares = 0;
$positivos = 0;
$negativos = 0;

for ($i = 0; $i < 5; $i++) {
    $valor = intval(fgets(STDIN));
    
    if ($valor % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
    
    if ($valor > 0) {
        $positivos++;
    } elseif ($valor < 0) {
        $negativos++;
    }
}

echo "$pares valor(es) par(es)\n";
echo "$impares valor(es) impar(es)\n";
echo "$positivos valor(es) positivo(s)\n";
echo "$negativos valor(es) negativo(s)\n";

?>