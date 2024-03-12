<?php
list($x, $y) = explode(' ', readline());

if($x > 0 && $y > 0)
{
    echo "Q1\n";
}
elseif($x > 0 && $y < 0)
{
    echo "Q4\n";
}
elseif($x < 0 && $y < 0)
{
    echo "Q3\n";
}
elseif($x < 0 && $y > 0)
{
    echo "Q2\n";
}
elseif($x == 0 && $y != 0)
{
    echo "Eixo Y\n";
}
elseif($x != 0 && $y == 0)
{
  echo "Eixo X\n";
}
else
{
  echo "Origem\n";
}
?>
