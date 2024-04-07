<?php
/*Gravity Boy é um jogo mobile onde você controla Gravity Boy. Quando a tela do celular é pressionada a gravidade muda e caso Gravity Boy esteja no chão ele vai para o teto, e caso ele esteja no teto ele volta para o chão. O objetivo do jogo é completar a fase usando o mínimo de mudanças de gravidade possíveis, sem cair nos buracos e superando os obstáculos da fase. Quando Gravity Boy se depara com um relevo mais alto do que o que ele está atualmente, ele precisar usar a troca de Gravidade ou ficará preso já que o mesmo não consegue pular.

A fase termina quando Gravity Boy chega na posição N, seja do chão ou do teto.

Seu objetivo é desenvolver um programa que dado o relevo da fase do jogo Gravity Boy, responda o mínimo de mudanças de gravidade necessárias para completar a fase



Obs:

1. A fase da imagem acima representa a fase do primeiro caso de teste.

2. Gravity Boy pode escolher começar correr a fase no teto ou chão.

3. Existe uma solução para todas as fases.

Entrada
A entrada contém vários casos de teste. A primeira linha contém um inteiro N que representa a largura da fase.

A segunda linha irá conter N inteiros X1; X2; ...; Xn representando o relevo do teto da fase.

A terceira linha irá conter N inteiros X1; X2; ...; Xn representando o relevo do chão da fase.

(1 ≤ N ≤ 105)

(0 ≤ Xn ≤ 109)

Saída
Para cada caso de teste imprima o mínimo de mudanças de gravidade necessárias para Gravity Boy completar a fase*/

$N = intval(readline()); // Largura da fase

$entradaTeto = explode(" ", readline()); // Relevo do teto
$entradaChao = explode(" ", readline()); // Relevo do chão

// Array associativo para representar as possíveis mudanças de gravidade
$mudancas = ['-1' => $entradaChao, '1' => $entradaTeto];

$mudancaTeto = 0; // Contador de mudanças de gravidade necessárias para o teto
$mudancaChao = 0; // Contador de mudanças de gravidade necessárias para o chão

$local = 1; // Inicializa a posição de Gravity Boy (1 para teto, -1 para chão)

// Loop para verificar as mudanças de gravidade necessárias para o teto
for ($i = 0; $i < $N; $i++) {
    if ($mudancas[$local][$i] == 0) { // Se houver um obstáculo
        $mudancaTeto++; // Incrementa o contador de mudanças de gravidade
        $local *= -1; // Alterna entre teto e chão
    } elseif ($i != 0) {
        if ($mudancas[$local][$i] > $mudancas[$local][$i - 1]) { // Se o relevo aumentar
            $mudancaTeto++; // Incrementa o contador de mudanças de gravidade
            $local *= -1; // Alterna entre teto e chão
        }
    }
}

$local = -1; // Define a posição inicial como chão

// Loop para verificar as mudanças de gravidade necessárias para o chão
for ($i = 0; $i < $N; $i++) {
    if ($mudancas[$local][$i] == 0) { // Se houver um obstáculo
        $mudancaChao++; // Incrementa o contador de mudanças de gravidade
        $local *= -1; // Alterna entre chão e teto
    } elseif ($i != 0) {
        if ($mudancas[$local][$i] > $mudancas[$local][$i - 1]) { // Se o relevo aumentar
            $mudancaChao++; // Incrementa o contador de mudanças de gravidade
            $local *= -1; // Alterna entre chão e teto
        }
    }
}

// Verifica qual das opções tem o menor número de mudanças de gravidade e imprime o resultado
if ($mudancaChao > $mudancaTeto)
    echo "$mudancaTeto\n";
else
    echo "$mudancaChao\n";
?>
