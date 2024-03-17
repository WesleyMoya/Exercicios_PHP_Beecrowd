<?php

$senha_correta = 2002;

while (true) {
    $senha = intval(fgets(STDIN));

    if ($senha == $senha_correta) {
        echo "Acesso Permitido\n";
        break;
    } else {
        echo "Senha Invalida\n";
    }
}

?>