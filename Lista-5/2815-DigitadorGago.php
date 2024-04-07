<?php
/*Francisco Iote é uma gago diferente. Ele não somente fala repetindo sílabas como estranhamente quando digita um texto ele repete algumas sílabas, tornando a leitura muito chata. Ele repete apenas sílabas que tenham exatamente 2 letras e nunca repete uma sílaba que não seja a primeira sílaba da palavra. Ele também repete apenas uma vez, ou seja a palavra bola, por exemplo, pode aparecer como bola ou bobola, nunca bobobola.

Você foi chamado como perito para traduzir alguns textos excritos por Francisco eliminando as redundâncias de texto por ele geradas.

Entrada
A entrada é composta por apenas uma linha com até 1000 palavras, cada uma delas com no máximo 15 caracteres. Esta linha de texto deve ser corrigida eliminando-se as redundâncias, conforme exemplo abaixo.

Saída
Seu programa deve gerar uma versão do texto fornecido por Francisco que não contenha as repetições descritas acima.*/

define('MAXSIZE', 50);

// Função para verificar se uma palavra atende aos critérios de duplicação
function verifica_duplicacao($palavra) {
    $tamanho = strlen($palavra);
    if ($tamanho < 4) {
        return $palavra; // Retorna a palavra original se o tamanho for menor que 4
    }

    for ($i = 0; $i < $tamanho - 3; $i++) {
        if ($palavra[$i] == $palavra[$i + 2] && $palavra[$i + 1] == $palavra[$i + 3]) {
            return substr($palavra, $i + 2); // Retorna a parte duplicada da palavra
        }
    }

    return $palavra; // Retorna a palavra original se não houver duplicação
}

// Lê a entrada como uma linha e divide as palavras
$entrada = readline();
$palavras = explode(" ", $entrada);

// Processa cada palavra e verifica duplicação
$resultado = array_map('verifica_duplicacao', $palavras);

// Imprime o resultado final
echo implode(" ", $resultado) . "\n";

?>