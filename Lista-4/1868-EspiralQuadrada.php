<?php
// Loop infinito para processar múltiplos casos
while (true) {
    // Leitura do tamanho da matriz
    $N = intval(readline());
    
    // Verificação se o tamanho é zero, indicando o fim da entrada
    if ($N == 0)
        break;

    // Inicialização da matriz com 'O's
    $matriz = array_fill(0, $N, array_fill(0, $N, 'O'));

    // Definição das direções: Esquerda, Cima, Direita, Baixo
    $direcoes = array(
        array(0, -1), // Esquerda
        array(-1, 0), // Cima
        array(0, 1),  // Direita
        array(1, 0)   // Baixo
    );

    // Direção inicial: Direita
    $direcao_atual = 2;

    // Posição inicial no centro da matriz
    $posicaoX = intval($N / 2);
    $posicaoY = intval($N / 2);

    // Array para rastrear as posições visitadas
    $passou = [];

    // Loop para percorrer a matriz
    for ($c = 0; $c < $N * $N; $c++) {
        // Marca a posição atual como visitada
        $matriz[$posicaoX][$posicaoY] = 'X';

        // Exibe a matriz
        foreach ($matriz as $linha) {
            echo implode("", $linha) . "\n";
        }

        // Registra a posição atual
        array_push($passou, strval($posicaoX) . " " . strval($posicaoY));
        
        // Reseta a posição atual na matriz para 'O'
        $matriz[$posicaoX][$posicaoY] = 'O';

        // Atualiza a próxima posição de acordo com a direção atual
        if ($c == 0) {
            $posicaoX += $direcoes[$direcao_atual][0];
            $posicaoY += $direcoes[$direcao_atual][1];
        } else {
            if ($direcao_atual == 2) {
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[1][0]) . " " . strval($posicaoY + $direcoes[1][1]), $passou)) {
                    $direcao_atual = 1;
                }
            } elseif ($direcao_atual == 1) {
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[0][0]) . " " . strval($posicaoY + $direcoes[0][1]), $passou)) {
                    $direcao_atual = 0;
                }
            } elseif ($direcao_atual == 0) {
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[3][0]) . " " . strval($posicaoY + $direcoes[3][1]), $passou)) {
                    $direcao_atual = 3;
                }
            } elseif ($direcao_atual == 3) {
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[2][0]) . " " . strval($posicaoY + $direcoes[2][1]), $passou)) {
                    $direcao_atual = 2;
                }
            }

            // Atualiza a posição após a mudança de direção
            $posicaoX += $direcoes[$direcao_atual][0];
            $posicaoY += $direcoes[$direcao_atual][1];
        }
    }
    echo "@\n"; // Marca o final de uma matriz
}
?>
