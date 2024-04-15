<?php
$vetor[0] = readline();
if($vetor[0] <= 50){
  for($i = 1; $i < 10; $i++){
    $vetor[$i] = $vetor[$i-1] * 2;
  }
  for($i = 0; $i < 10; $i++){
    echo "N[$i] = $vetor[$i]\n";
  }
}
else{
  echo "Valor inválido";
}
?>