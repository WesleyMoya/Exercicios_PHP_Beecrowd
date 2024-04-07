<?php
/*João quer montar um painel de leds contendo diversos números. Ele não possui muitos leds, e não tem certeza se conseguirá montar o número desejado. Considerando a configuração dos leds dos números abaixo, faça um algoritmo que ajude João a descobrir a quantidade de leds necessário para montar o valor.

Obs.: Para programadores de Javascript, recomenda-se o uso de "input.trim().split('\n')" para evitar erros conhecidos.

Entrada
A entrada contém um inteiro N, (1 ≤ N ≤ 1000) correspondente ao número de casos de teste, seguido de N linhas, cada linha contendo um número (1 ≤ V ≤ 10100) correspondente ao valor que João quer montar com os leds.

Saída
Para cada caso de teste, imprima uma linha contendo o número de leds que João precisa para montar o valor desejado, seguido da palavra "leds".*/ 

$casos_teste = intval(readline()); // Número de casos de teste
$valores = [];
// Obtendo os valores de entrada
for ($i = 0; $i < $casos_teste; $i++) {
    array_push($valores, strval(readline()));
}
// Iterando sobre os valores de entrada
foreach ($valores as $valor) {
    $digitos = str_split($valor); // Separando o número em dígitos
    $total_leds = 0; // Inicializando o total de leds necessários para o número
    // Contando os leds para cada dígito
    foreach ($digitos as $digito) {
        switch ($digito) {
            case "1":
                $total_leds += 2; // Um led para o número 1
                break;
            case "2":
            case "3":
            case "5":
                $total_leds += 5; // Sete leds para os números 2, 3 e 5
                break;
            case "4":
                $total_leds += 4; // Quatro leds para o número 4
                break;
            case "6":
            case "9":
            case "0":
                $total_leds += 6; // Seis leds para os números 6, 9 e 0
                break;
            case "7":
                $total_leds += 3; // Três leds para o número 7
                break;
            case "8":
                $total_leds += 7; // Sete leds para o número 8
                break;
        }
    }
    echo "$total_leds leds\n"; // Imprimindo o total de leds necessários
}
?>