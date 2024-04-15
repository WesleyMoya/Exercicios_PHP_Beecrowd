<?php
$alfabeto = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++){
  $linha = fgets(STDIN);
  $varia = intval(fgets(STDIN));
  if ($varia <= 25){
    $linha = str_split($linha);
    for ($j = 0; $j < count($linha) - 1; $j++){
      $posicao = array_search($linha[$j], $alfabeto);
      if ($posicao - $varia < 0){
        $linha[$j] = $alfabeto[($posicao - $varia) + 26];
      } else {
        $linha[$j] = $alfabeto[$posicao - $varia];
      }
    }
    $linha = implode($linha);
    echo $linha;
  }

}
?>