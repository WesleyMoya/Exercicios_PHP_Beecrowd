<?php
list($A, $B) = explode(' ', readline());

if ($A % $B == 0 || $B % $A == 0)
{
  echo "Sao Multiplos\n";
}
else
{
  echo "Nao sao Multiplos\n";
}
?>