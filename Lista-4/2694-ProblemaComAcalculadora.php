<?php
/*Joãozinho tem que ajudar seu pai. Um relatório específico com alguns números está saindo com caracteres indesejáveis no meio. A ideia é apenas somar os 3 valores que aparecem em cada linha sempre na mesma posição, ignorando as letras e apresentar esta soma. Não existem espaços em branco na linha.

Entrada
A primeira linha de entrada contém um inteiro N (N < 100000). Seguem N linhas com exatos 14 caracteres que devem ser lidas e delas extraídos e somados os três números existentes.

Saída
Para cada linha de entrada, seu programa deve apresentar um valor numérico inteiro, que é a soma dos 3 números existentes na linha.*/

$casos = intval(fgets(STDIN)); // Número de casos de teste

while ($casos--) {
    $linha = rtrim(fgets(STDIN)); // Lê a linha e remove o caractere de nova linha

    $soma = 0; // Inicializa a variável para armazenar a soma
    $numero = 0; // Inicializa a variável para armazenar cada número encontrado na linha
    $dez = 1; // Inicializa a variável para representar a posição do dígito

    // Loop para percorrer cada caractere da linha
    for ($i = 0; $i < strlen($linha); $i++) {
        if (ctype_digit($linha[$i])) { // Verifica se o caractere é um dígito
            $numero = $numero * 10 + intval($linha[$i]); // Atualiza o número
        } else {
            $soma += $numero; // Adiciona o número à soma
            $numero = 0; // Reseta a variável número
        }
    }

    // Adiciona o último número, se houver
    $soma += $numero;

    echo "$soma\n"; // Imprime a soma
}
?>