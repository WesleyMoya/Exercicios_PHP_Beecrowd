<?php
list($a, $b , $c) = explode(' ', readline());

//a
if( $a < $b && $a < $c )
{
  echo $a . "\n";
  if( $b < $c )
  {
    echo $b . "\n" . $c . "\n";
  }
  else
  {
    echo $c . "\n" . $b . "\n";
  }
//b
}
if( $b < $a && $b < $c )
{
  echo $b. "\n";
  if( $a < $c )
  {
    echo $a . "\n" . $c . "\n";
  }
  else
  {
    echo $c . "\n" . $a . "\n";
  }
}
//c
if( $c < $a && $c < $b )
{
  echo $c. "\n";
  if( $a < $b )
  {
    echo $a . "\n" . $b . "\n";
  }
  else
  {
    echo $b . "\n" . $a . "\n";
  }
}
echo "\n";

echo $a, PHP_EOL;
echo $b, PHP_EOL;
echo $c, PHP_EOL;
?>