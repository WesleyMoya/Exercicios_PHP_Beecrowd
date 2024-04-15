<?php
$vetor = array();
for($i = 0; $i < 100; $i++){
  $vetor[$i] = (float) readline();
  if($vetor[$i] <= 10){
    $vetor[$i] = number_format($vetor[$i], 1, '.', '');
    echo "A[$i] = " . $vetor[$i] . PHP_EOL;
  }
}
?>