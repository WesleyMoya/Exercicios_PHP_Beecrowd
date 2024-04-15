<?php
$n = intval(fgets(STDIN));

if($n > 0 && $n <= 10**6)
{
  for($i = 0; $i < $n; $i++){
    if($i == $n-1){
      echo "Ho!";
    }
    else{
      echo "Ho ";
    }
  }
  echo "\n";
}
?>