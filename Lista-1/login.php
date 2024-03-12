<?php

$nome = $_GET["nome"];
$email = $_GET["email"];
$senhaIn =  $_GET["senha"];

$senhaOri = "1020lele";

if($senhaIn == $senhaOri){
    echo "Logado com Sucesso!" . PHP_EOL;    
    echo "Nome: " . $nome . PHP_EOL;
    echo "Email: " . $email;
}
else{
    echo "Senha errada!";
}

?>