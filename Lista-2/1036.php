<?php
list($a, $b, $c) = explode(' ', readline());

$delta = ($b * $b) - (4 * $a * $c);

if($a == 0 || $delta < 0)
{
  echo "Impossivel calcular\n";
}

else
{
  $R1 = (($b * -1) + sqrt($delta))/ (2 * $a);
  $R2 = (($b * -1) - sqrt($delta))/ (2 * $a);
  echo "R1 = ". number_format($R1, 5, '.', '') ."\n";
  echo "R2 = ". number_format($R2, 5, '.', '') ."\n";
}

?>