<?php
$l = intval(fgets(STDIN)); 
$c = intval(fgets(STDIN));

if($l == $c){
  echo "1";
}
elseif($l % 2 == 0 && $c % 2 != 0){
  echo "0";
}
elseif($l % 2 != 0 && $c % 2 == 0){
  echo "0";
}
elseif($l % 2 == 0 && $c % 2 == 0){
  echo "1";
}
elseif($l % 2 != 0 && $c % 2 != 0){
  echo "1";
}
echo "\n";
?>