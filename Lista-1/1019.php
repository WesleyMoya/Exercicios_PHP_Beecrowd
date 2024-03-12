<?php
//Ler o valor inteiro N
$tempo_segundos = intval(readline());

//Calcular horas, minutos e segundos
$horas = intval($tempo_segundos / 3600);
$tempo_segundos %= 3600;
$minutos = intval($tempo_segundos / 60);
$segundos = $tempo_segundos % 60;

//Imprimir o tempo no formato horas:minutos:segundos
echo $horas . ":" . $minutos . ":" . $segundos . "\n";
?>