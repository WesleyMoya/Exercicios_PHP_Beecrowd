<?php

$vetor = array();

for($i = 0; $i < 10; $i++)
{
  $vetor[$i] = intVal(fgets(STDIN));

  if($vetor[$i] <= 0)
  {
    $vetor[$i] = 1;
  }
}
for($i = 0; $i < 10; $i++)
{
  echo "X[$i] = $vetor[$i]\n";
}

?>