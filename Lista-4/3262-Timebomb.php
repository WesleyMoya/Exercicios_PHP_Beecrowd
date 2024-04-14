<?php
// Definição do tamanho padrão do código
$tamanhoCodigo = 5;

// Leitura dos dígitos do código
while ($tamanhoCodigo--) {
    $linhaCodigo[] = str_split(readline());
}

// Remoção dos espaços vazios adicionais no final de cada linha do código
foreach ($linhaCodigo as $linha) {
    array_pop($linha);
    array_pop($linha);
}

// Mapeamento dos números possíveis de entrada com sua representação em código
$mapaNumeros = [
    '**** ** ** ****' => 0,
    '  *  *  *  *  *' => 1,
    '***  *****  ***' => 2,
    '***  ****  ****' => 3,
    '* ** ****  *  *' => 4,
    '****  ***  ****' => 5,
    '****  **** ****' => 6,
    '***  *  *  *  *' => 7,
    '**** ***** ****' => 8,
    '**** ****  ****' => 9
];

// Array para armazenar os números de entrada
$numerosEntrada = [];

// Índice para percorrer as linhas do código
$indice = 0;

// Construção dos números de entrada a partir do código
while ($indice < count($linhaCodigo[0])) {
    $arrayNumeros = [
        $linhaCodigo[0][$indice], $linhaCodigo[0][$indice + 1], $linhaCodigo[0][$indice + 2],
        $linhaCodigo[1][$indice], $linhaCodigo[1][$indice + 1], $linhaCodigo[1][$indice + 2],
        $linhaCodigo[2][$indice], $linhaCodigo[2][$indice + 1], $linhaCodigo[2][$indice + 2],
        $linhaCodigo[3][$indice], $linhaCodigo[3][$indice + 1], $linhaCodigo[3][$indice + 2],
        $linhaCodigo[4][$indice], $linhaCodigo[4][$indice + 1], $linhaCodigo[4][$indice + 2]
    ];
    array_push($numerosEntrada, implode("", $arrayNumeros));
    $indice += 4;
}

// Número resultante da entrada
$numeroExibido = "";

// Conversão dos números de entrada em seus equivalentes numéricos
foreach ($numerosEntrada as $numero) {
    if (array_key_exists($numero, $mapaNumeros))
        $numeroExibido .= $mapaNumeros[$numero];
}

// Verificação se o número é divisível por 6 e se a quantidade de números de entrada é igual ao número exibido
if (intval($numeroExibido) % 6 == 0 && count($numerosEntrada) == strlen($numeroExibido))
    echo "BEER!!\n"; // Exibir "BEER!!" se as condições forem atendidas
else
    echo "BOOM!!\n"; // Exibir "BOOM!!" caso contrário
?>