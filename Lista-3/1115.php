<?php

while (true) {
    // Leitura das coordenadas
    $entrada = explode(" ", fgets(STDIN));
    $x = intval($entrada[0]);
    $y = intval($entrada[1]);

    // Verifica se pelo menos uma coordenada é nula
    if ($x == 0 || $y == 0) {
        break;
    }

    // Determina o quadrante
    if ($x > 0 && $y > 0) {
        echo "primeiro\n";
    } elseif ($x < 0 && $y > 0) {
        echo "segundo\n";
    } elseif ($x < 0 && $y < 0) {
        echo "terceiro\n";
    } elseif ($x > 0 && $y < 0) {
        echo "quarto\n";
    }
}

?>