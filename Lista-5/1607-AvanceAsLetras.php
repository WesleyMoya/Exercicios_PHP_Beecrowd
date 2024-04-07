<?php
/*É dado na entrada uma string A e outra B. Em uma operação você pode escolher uma letra da primeira string e avançar esta letra. Avançar uma letra significa transformá-la na próxima letra do alfabeto, veja que a próxima letra depois de z vem a letra a novamente!

Por exemplo, podemos transformar a string ab em bd em no mínimo 3 operações: ab -> bb -> bc -> bd. Podemos aplicar operações nas letras em qualquer ordem, outra possibilidade seria: ab -> ac -> bc -> bd.

Dadas as duas strings, calcule o mínimo número de operações necessárias para transformar a primeira na segunda.

Entrada
Na primeira linha terá um inteiro T (T ≤ 100) indicando o número de casos de teste.

Para cada caso, na única linha teremos as duas strings A (1 ≤ |A| ≤ 100* ou 1 ≤ |A| ≤ 104** - sendo que |A| significa o tamanho da string A) e B (|B| = |A|* ou |B| = |A​|**) separadas por um espaço. Ambas as strings são compostas por letras do alfabeto minúsculas apenas e são do mesmo tamanho.

*Ocorre em aproximadamente 90% dos casos de teste;

**Ocorre nos demais casos de teste.

Saída
Para cada caso imprima o número mínimo de operações.*/

$T = intval(fgets(STDIN)); // Número de casos de teste

while ($T) {
    $input = explode(" ", trim(fgets(STDIN))); // Lendo as duas strings
    $s1 = $input[0];
    $s2 = $input[1];
    $operations = 0; // Inicializando o contador de operações

    // Percorrendo ambas as strings
    for ($i = 0; $i < strlen($s1); $i++) {
        $char1 = $s1[$i];
        $char2 = $s2[$i];
        
        // Calculando o número de operações necessárias para transformar o caractere de $s1 em $s2
        if (ord($char2) >= ord($char1)) {
            $operations += ord($char2) - ord($char1);
        } else {
            // Se a ordem de $char2 for menor que a ordem de $char1, precisamos contar o número de passos para ir de $char1 até 'z' e depois de 'a' até $char2
            $operations += (ord('z') - ord($char1)) + (ord($char2) - ord('a')) + 1;
        }
    }

    echo "$operations\n"; // Imprimindo o número mínimo de operações para o caso atual

    $T--; // Decrementando o número de casos de teste
}
?>