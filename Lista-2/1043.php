<?php
list($a, $b , $c) = explode(' ', readline());

if ($a < $b + $c && $b < $a + $c && $c < $a + $b)
{
  $perimetro = $a + $b + $c;
  echo "Perimetro = " . number_format($perimetro, "1") . "\n";
}
else
{
  $area = (($b + $a) * $c) / 2;
  echo "Area = " . number_format($area, "1") . "\n";
}
?>