<?php
list($hi, $hf) = explode(' ', readline());

if(intval($hi) < intval($hf))
{
  $duracao = intval($hf) - intval($hi);
}
elseif(intval($hi) > intval($hf))
{
  $duracao = 24 - (intval($hi) - intval($hf));
}
elseif(intval($hi) == intval($hf))
{
  $duracao = 24;
}
echo "O JOGO DUROU $duracao HORA(S)\n";
?>