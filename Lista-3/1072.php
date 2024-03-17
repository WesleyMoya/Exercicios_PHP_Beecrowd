<?php

$n = intval(fgets(STDIN));
$count_inside = 0;
$count_outside = 0;

for ($i = 0; $i < $n; $i++) {
    $x = intval(fgets(STDIN));
    
    if ($x >= 10 && $x <= 20) {
        $count_inside++;
    } else {
        $count_outside++;
    }
}

echo "$count_inside in\n";
echo "$count_outside out\n";

?>