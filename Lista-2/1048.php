<?php
$s = floatval(fgets(STDIN));

if ($s <= 400.00) 
{
    $p = 0.15;
} 
elseif ($s <= 800.00) 
{
    $p = 0.12;
} 
elseif ($s <= 1200.00) 
{
    $p = 0.10;
} 
elseif ($s <= 2000.00) 
{
    $p = 0.07;
} 
else 
{
    $p = 0.04;
}

$r = $s * $p;
$ns = $s + $r;

echo "Novo salario: " . number_format($ns, 2, '.', '') . "\n";
echo "Reajuste ganho: " . number_format($r, 2, '.', '') . "\n";
echo "Em percentual: " . $p * 100 . " %\n";
?>