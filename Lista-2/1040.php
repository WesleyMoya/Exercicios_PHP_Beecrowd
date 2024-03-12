<?php
list($n1, $n2, $n3, $n4) = explode(' ', readline());

$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / 10 ;
$media = intval($media * 10);
$media = $media / 10;
$media = number_format($media, 1, '.', '');

echo "Media: $media\n";
if($media >= 7.0)
{
  echo "Aluno aprovado.\n";
}
elseif($media < 5.0)
{
  echo "Aluno reprovado.\n";
}
else
{
  echo "Aluno em exame.\n";
  $exame = floatval(readline());
  $media = ($media + $exame) / 2;
  echo "Nota do exame: ".number_format($exame, 1, '.', '')."\n";
  if($media >= 5.0)
  {
    echo "Aluno aprovado.\n";
  }
  else
  {
    echo "Aluno reprovado.\n";
  }
  echo "Media final: ".number_format($media, 1, '.', '')."\n";
}
?>