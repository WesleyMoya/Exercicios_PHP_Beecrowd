<?php

$x = intval(fgets(STDIN));

$count = 0;
while ($count < 6) {
    if ($x % 2 != 0) {
        echo "$x\n";
        $count++;
    }
    $x++;
}

?>