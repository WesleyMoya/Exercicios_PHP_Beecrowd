<?php
/*Nós temos alguns textos e queremos formatá-los e justificá-los à direita, ou seja, alinhar suas linhas à margem direita de cada um. Crie um programa que, após ler um texto, reimprima esse texto com apenas um espaço entre as palavras e suas linhas justificadas à direita em todo o texto.

Entrada
A entrada contém diversos casos de teste. A primeira linha de cada caso de teste contém um inteiro N (1 ≤ N ≤ 100) que indica o número de linhas de texto que virão a seguir. Cada uma destas N linhas de texto contém de 1 a 50 letras maiúsculas (‘A’-‘Z’) ou espaços (‘ ’). Todas as linhas de texto contém no mínimo uma letra. Poderá haver mais de um espaço entre as palavras. É também possível haver espaços no início e no final da linha. O fim da entrada é indicado por N = 0.

Saída
Para cada caso de teste imprima o texto com apenas um espaço entre as palavras, e inserindo tantos espaços quanto forem necessários à esquerda de cada linha do texto, para que elas apareçam alinhadas à margem direita daquele texto, e na mesma ordem da entrada. Deixe uma linha em branco entre os casos de testes. Não imprima espaços no final de cada linha, nem espaços desnecessários à esquerda, de modo que pelo menos uma das linhas impressa em cada texto inicie com uma letra.*/

// Função para justificar o texto à direita
function justificarTexto($texto) {
    // Encontra o comprimento da linha mais longa
    $maior_comprimento = 0;
    foreach ($texto as $linha) {
        $comprimento = strlen($linha);
        if ($comprimento > $maior_comprimento)
            $maior_comprimento = $comprimento;
    }

    // Justifica cada linha à direita
    foreach ($texto as $linha) {
        $espacos_a_adicionar = $maior_comprimento - strlen($linha);
        $linha_justificada = str_repeat(" ", $espacos_a_adicionar) . $linha;
        echo $linha_justificada . "\n";
    }
}

$N = intval(readline()); // Número de linhas de texto

while ($N != 0) {
    $texto = [];
    
    // Lendo as linhas de texto
    for ($i = 0; $i < $N; $i++) {
        $linha = readline();
        // Removendo espaços extras e espaços em branco no início e no final
        $linha = preg_replace('/\s+/', ' ', trim($linha));
        array_push($texto, $linha);
    }
    
    // Chamando a função para justificar o texto à direita
    justificarTexto($texto);

    $N = intval(readline());
    
    if ($N != 0)
        echo "\n";
}
?>