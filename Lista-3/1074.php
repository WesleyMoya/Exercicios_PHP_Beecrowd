<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $x = intval(fgets(STDIN));
    
    if ($x == 0) {
        echo "NULL\n";
    } elseif ($x % 2 == 0) {
        if ($x > 0) {
            echo "EVEN POSITIVE\n";
        } else {
            echo "EVEN NEGATIVE\n";
        }
    } else {
        if ($x > 0) {
            echo "ODD POSITIVE\n";
        } else {
            echo "ODD NEGATIVE\n";
        }
    }
}

?>