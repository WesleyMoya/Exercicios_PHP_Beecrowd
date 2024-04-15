<?php
$totalS = 0;
$totalB = 0;
$totalA = 0;
$totalS1 = 0;
$totalB1 = 0;
$totalA1 = 0;

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++){
  $nome = fgets(STDIN);
  list($s, $b, $a) = explode(" ", fgets(STDIN));
  list($s1, $b1, $a1) = explode(" ", fgets(STDIN));

  $totalS = $totalS + $s;
  $totalB = $totalB + $b;
  $totalA = $totalA + $a;

  $totalS1 = $totalS1 + $s1;
  $totalB1 = $totalB1 + $b1;
  $totalA1 = $totalA1 + $a1;
}
$totalS = ($totalS1 / $totalS) * 100;
$totalB = ($totalB1 / $totalB) * 100;
$totalA = ($totalA1 / $totalA) * 100;

echo "Pontos de Saque: " . number_format(round($totalS, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . " %.\n";

echo "Pontos de Bloqueio: " . number_format(round($totalB, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . " %.\n";

echo "Pontos de Ataque: " . number_format(round($totalA, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . " %.\n";
?>