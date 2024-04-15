<?php
$vetor = array();
$vetorInvertido = array();

for($i = 0; $i < 20; $i++){
  $vetor[$i] = readline();
}
for($i = 0; $i < 20; $i++){
  $vetorInvertido[$i] = $vetor[19 - $i];
  echo "N[$i] = " . $vetorInvertido[$i] . "\n";
}
?>