<?php

// Lê os quatro valores inteiros
$A = intval(fgets(STDIN));
$B = intval(fgets(STDIN));
$C = intval(fgets(STDIN));
$D = intval(fgets(STDIN));

// Calcula a diferença
$diferenca = ($A * $B) - ($C * $D);

// Imprime a diferença
echo "DIFERENCA = $diferenca\n";

?>