<?php
/*As crianças adoram desenhar árvores de natal e você desafiou algumas delas a desenharem árvores de diversos tamanhos com apenas com o caractere asterisco "*".

A regra é simples. De baixo para cima, o tronco da árvore consiste de 3 asteriscos e depois 1. Em seguida vem o restante da árvore, com cada fileira de folhas iniciando no tamanho que você determinou e diminuindo de dois em dois, até chegar na copa da árvore que terá apenas um asterisco. Note que para isso dar certo, somente será permitido tamanhos ímpares para estas árvores.

Entrada
A entrada contém vários casos de teste e termina com EOF. Cada caso de teste consiste em um inteiro N (2 < N < 100).

Saída
Para cada caso de teste de entrada, seu programa deverá desenhar uma árvore conforme especificação acima e exemplo abaixo, com uma linha em branco após cada árvore.*/

// Loop principal para cada caso de teste
while (fscanf(STDIN, "%d", $N) !== false) {
    // Desenho da árvore
    for ($i = $N / 2, $j = 1; $i >= 0; --$i, $j += 2) {
        $espacos = str_repeat(' ', $i); // Espaços à esquerda
        $asteriscos = str_repeat('*', $j); // Parte da árvore
        $linha = $espacos . $asteriscos . PHP_EOL; // Concatenação da linha
        echo $linha; // Imprime a linha
    }

    // Tronco da árvore
    $espacos = str_repeat(' ', $N / 2); // Espaços à esquerda para o tronco
    $tronco = '*' . PHP_EOL; // Tronco da árvore
    echo $espacos . $tronco; // Imprime o tronco

    // Base do tronco
    $espacos = str_repeat(' ', $N / 2 - 1); // Espaços à esquerda para a base do tronco
    $base_tronco = '***' . PHP_EOL . PHP_EOL; // Base do tronco
    echo $espacos . $base_tronco; // Imprime a base do tronco
}
?>
