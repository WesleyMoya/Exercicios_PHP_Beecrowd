<?php

$a = intval(fgets(STDIN));

for ($b = 1; $b <= $a; $b++) {
    $c = $b * $b;
    $d = $b * $b * $b;
    echo "$b $c $d\n";
}

?>