<?php

$arr = explode(" ", readline());
$arr[0] = (float) $arr[0]; 
$arr[1] = (float) $arr[1];
$arr[2] = (float) $arr[2];
rsort($arr);

$a = $arr[0];
$b = $arr[1];
$c = $arr[2];

// Verifica se os lados formam um triângulo
if ($a >= $b + $c) {
  echo "NAO FORMA TRIANGULO" . PHP_EOL;
  exit;
}

// Classifica o tipo de triângulo
if ($a * $a == $b * $b + $c * $c) {
  echo "TRIANGULO RETANGULO" . PHP_EOL;
} elseif ($a * $a > $b * $b + $c * $c) {
  echo "TRIANGULO OBTUSANGULO" . PHP_EOL;
} else {
  echo "TRIANGULO ACUTANGULO" . PHP_EOL;
}

// Verifica se os lados são iguais
if ($a == $b && $b == $c) {
  echo "TRIANGULO EQUILATERO" . PHP_EOL;
} elseif ((($a == $b) && ($a != $c))||(($a == $c) && ($a != $b))||(($b == $c) && ($b != $a))) {
  echo "TRIANGULO ISOSCELES" . PHP_EOL;
}

?>