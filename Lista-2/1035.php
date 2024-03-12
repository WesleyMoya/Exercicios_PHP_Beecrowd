<?php
list($A, $B, $C, $D) = explode(' ', readline());

if($B > $C && $D > $A && ($C + $D > $A + $B) && $C + $D > 0 && $A % 2 == 0)
{
    echo "Valores aceitos\n";
}
else
{
    echo "Valores nao aceitos\n";
}
?>