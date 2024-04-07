<?php
/*Em chats, é muito comum entre jovens e adolescentes utilizar sequências de letras, que parecem muitas vezes aleatórias, para representar risadas. Alguns exemplos comuns são:

huaauhahhuahau
hehehehe
ahahahaha
jaisjjkasjksjjskjakijs
huehuehue

Cláudia é uma jovem programadora que ficou intrigada pela sonoridade das “risadas digitais”. Algumas delas ela nem mesmo consegue pronunciar! Mas ela percebeu que algumas delas parecem transmitir melhor o sentimento da risada que outras. A primeira coisa que ela percebeu é que as consoantes não interferem no quanto as risadas digitais influenciam na transmissão do sentimento. A segunda coisa que ela percebeu é que as risadas digitais mais engra¸cadas são aquelas em que as sequências de vogais são iguais quando lidas na ordem natural (da esquerda para a direita) ou na ordem inversa (da direita para a esquerda), ignorando as consoantes. Por exemplo, “hahaha” e “huaauhahhuahau” estão entre as risadas mais engraçadas, enquanto “riajkjdhhihhjak” e “huehuehue” não estão entre as mais engraçadas.

Cláudia está muito atarefada com a análise estatística das risadas digitais e pediu sua ajuda para escrever um programa que determine, para uma risada digital, se ela é das mais engraçadas ou não.

Entrada
A entrada é composta por uma linha, contendo uma sequência de no máximo 50 caracteres, formada apenas por letras minúsculas sem acentuação. As vogais são as letras ‘a’,‘e’,‘i’,‘o’,‘u’. A sequência contém pelo menos uma vogal.

Saída
Seu programa deve produzir uma linha contendo um caractere, “S” caso a risada seja das mais engra¸cadas, ou “N” caso contrário.*/

// Função para verificar se um caractere é uma vogal
function vogal($letra) {
    switch($letra) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            return 1; // Retorna verdadeiro se for vogal
        default:
            return 0; // Retorna falso se não for vogal
    }
}

$risada = readline(); // Lê a risada digital da entrada

$i = 0; // Índice do início da risada
$f = strlen($risada) - 1; // Índice do final da risada
$engracada = true; // Variável para indicar se a risada é engraçada

// Loop para percorrer a risada, verificando se ela é engraçada
while ($i < $f) {
    if (vogal($risada[$i]) && vogal($risada[$f])) { // Se ambos os caracteres são vogais
        if ($risada[$i] != $risada[$f]) { // Se as vogais são diferentes
            $engracada = false; // A risada não é engraçada
            break; // Sai do loop
        }
        ++$i; // Incrementa o índice do início da risada
        --$f; // Decrementa o índice do final da risada
    } else { // Se um dos caracteres não é vogal
        if (!vogal($risada[$i])) ++$i; // Se o caractere não for vogal, avança o índice do início
        if (!vogal($risada[$f])) --$f; // Se o caractere não for vogal, retrocede o índice do final
    }
}

// Imprime 'S' se a risada for engraçada, caso contrário imprime 'N'
echo $engracada ? 'S' : 'N', PHP_EOL;

?>
