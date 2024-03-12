<?php

list($cod, $quant) = explode(' ', readline());

switch($cod){
    case "1":
        $cod = 4.00;
        break;
    case "2":
        $cod = 4.50;
        break;
    case "3":
        $cod = 5.00;
        break;
    case "4":
        $cod = 2.00;
        break;
    case "5":
        $cod = 1.50;
        break;
}

$preco = $cod * $quant;
echo "Total: R$ ".number_format($preco,'2','.','')."\n";
?>