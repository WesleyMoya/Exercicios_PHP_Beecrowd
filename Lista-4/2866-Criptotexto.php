<?php
/*César é um detetive que investiga uma série de roubos que acontecem em sua cidade. Em todo lugar que um crime acontece, a pessoa que cometeu tal crime deixa uma mensagem escrita, formada por letras maiúsculas e minúsculas. César conseguiu achar um padrão nestas mensagens e agora extrai um texto oculto em cada mensagem e pede a sua ajuda para tentar descobrir quem está cometendo tais crimes.

Entrada
A entrada é composta por vários casos de teste. A primeira linha contém um número inteiro C (2 <= C <= 99) relativo ao número de casos de teste. Nas C linhas seguintes, haverá mensagens codificadas, todas com um mesmo padrão em relação ao exemplo abaixo.

Saída
Para cada caso de teste de entrada do seu programa, você deve imprimir o texto extraído da mensagem original.*/

// Lê o número de casos de teste
$numeroCasos = intval(fgets(STDIN));

// Loop através de cada caso de teste
while ($numeroCasos--) {
    // Lê a mensagem codificada
    $mensagemCodificada = trim(fgets(STDIN));

    // Obtém o tamanho da mensagem
    $tamanhoMensagem = strlen($mensagemCodificada);

    // Inicializa a saída como uma string vazia
    $textoExtraido = '';

    // Inicializa o índice para percorrer a mensagem
    $indice = $tamanhoMensagem - 1;

    // Loop para extrair o texto da mensagem
    while ($tamanhoMensagem--) {
        // Verifica se o caractere atual é uma letra minúscula
        if (ctype_lower($mensagemCodificada[$indice])) {
            // Adiciona o caractere à saída
            $textoExtraido .= $mensagemCodificada[$indice--];
        } else {
            // Incrementa o índice sem adicionar o caractere à saída
            $indice--;
        }
    }

    // Imprime o texto extraído
    echo $textoExtraido . "\n";
}

?>