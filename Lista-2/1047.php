<?php
list($hi, $mi, $hf, $mf) = explode(' ', readline());

$duracaoEmHoras = $hf - $hi;
$duracaoEmMinutos = $mf - $mi;

if($duracaoEmMinutos < 0)
{
  $duracaoEmHoras--;
  $duracaoEmMinutos += 60;
}
if($duracaoEmHoras < 0)
{
  $duracaoEmHoras += 24;
}
if($duracaoEmHoras == 0 && $duracaoEmMinutos == 0)
{
  $duracaoEmHoras = 24;
}
echo "O JOGO DUROU $duracaoEmHoras HORA(S) E $duracaoEmMinutos MINUTO(S)\n";
?>