<?php
$numero = floatval(readline());

if($numero >= 0 && $numero <= 25)
{
  echo "Intervalo [0,25]\n";
}
elseif($numero > 25 && $numero <= 50)
{
  echo "Intervalo (25,50]\n";
}
elseif($numero > 50 && $numero <= 75)
{
  echo "Intervalo (50,75]\n";
}
elseif($numero > 75 && $numero <= 100)
{
  echo "Intervalo (75,100]\n";
}
else
{
  echo "Fora de intervalo\n";
}
?>