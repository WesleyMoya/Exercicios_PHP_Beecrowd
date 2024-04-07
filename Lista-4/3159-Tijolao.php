<?php
/*Durante essa quarentena Amélia estava lembrando do que gostava de fazer na infância. De maneira nostálgica ela se lembrou do quanto gostava de jogar Snake no celular da sua mãe. Era o famoso 'tijolão', da marca Aikon. Ela até conseguiu encontrar um aplicativo para Android que simulava o joguinho, mas ela começou a se perguntar: "Como eu conseguia escrever mensagens com aquele teclado mesmo?".  Na imagem abaixo tem-se uma foto do celular à esquerda e o detalhe de seu teclado à direita.

 

tijolao

Ela lembrou como o teclado era utilizado para escrever mensagens. Nesse problema, para simplificar, iremos considerar um celular no idioma inglês (não há acentos).

 

As teclas de 2 a 9 são usadas para digitar as letras de ‘a’ a ‘z’, e funcionam  assim: se quisermos obter uma das letras associadas a uma das teclas, precisamos pressioná-la um número de vezes igual a posição da letra desejada. Por exemplo, pressionando a tecla 6 uma vez obtemos ‘m’. Se pressionarmos novamente, obteremos ‘n’ e depois ‘o’. Se continuarmos pressionando-a obteremos o número ‘6’ e depois reiniciamos em ‘m’, assim sucessivamente. A tecla 0 é utilizada para inserir espaços na mensagem; a tecla 1 era apenas o dígito '1' e algumas pontuações (que não serão usadas nesse problema) e a tecla # é usada para colocar a próxima letra em maiúsculo, por exemplo, se apertar #2 obteremos 'A', se apertar #27 obteremos 'Ap'.

 

No caso de termos duas letras consecutivas na mensagem que são formadas pela mesma tecla era necessário esperar um tempinho para continuar digitando, neste problema vamos considerar que  tecla * represente esse intervalo de tempo, ou seja, a função da tecla * no nosso caso é separar as sequências de pressionamentos de duas letras na mesma tecla. Por exemplo, para digitar a palavra ‘cafe’, a sequência de teclas pressionadas seria a seguinte: 222*2333*33. Mas se a segunda letra na mesma tecla for maiúscula não é necessário pressionar ‘*’ pois você terá de pressionar ‘#’ entre elas. Por exemplo, a palavra 'cAfe' corresponde à sequência 222#2333*33.

 

Como o teclado era bem duro,  Amélia odiava cometer erros, por isso ela quer saber a sequência mínima de teclas que deve apertar para digitar cada mensagem.

Entrada
A primeira linha de cada caso de teste contém um inteiro N (1 <= N <= 666) que representa a quantidade de mensagens que Amélia quer escrever. Cada uma das N linhas seguintes possuem uma frase de 1 a 140 caracteres. As frases serão compostas por espaços e letras minúsculas e maiúsculas sem acentos.

Saída
Para cada frase informada por Amélia você deve mostrar em uma linha a sequência mínima de teclas a serem pressionadas, todas juntas.*/

// Definição das letras e seus respectivos pressionamentos no teclado
$teclas = [
    'a' => '2', 'b' => '22', 'c' => '222',
    'd' => '3', 'e' => '33', 'f' => '333',
    'g' => '4', 'h' => '44', 'i' => '444',
    'j' => '5', 'k' => '55', 'l' => '555',
    'm' => '6', 'n' => '66', 'o' => '666',
    'p' => '7', 'q' => '77', 'r' => '777', 's' => '7777',
    't' => '8', 'u' => '88', 'v' => '888',
    'w' => '9', 'x' => '99', 'y' => '999', 'z' => '9999',
    ' ' => '0'
];

// Número de mensagens
$numeroMensagens = intval(readline());

// Loop para processar cada mensagem
for ($i = 0; $i < $numeroMensagens; $i++) {
    // Leitura da mensagem
    $mensagem = readline();
    
    // Inicialização da resposta
    $resposta = '';

    // Loop para percorrer cada caractere da mensagem
    for ($j = 0; $j < strlen($mensagem); $j++) {
        // Verifica se é necessário inserir o separador '*'
        if ($j > 0 && substr($teclas[strtolower($mensagem[$j])], 0, 1) == substr($teclas[strtolower($mensagem[$j - 1])], 0, 1) && !ctype_upper($mensagem[$j])) {
            $resposta .= '*';
        }
        
        // Verifica se a letra é maiúscula e insere o caractere '#' correspondente
        if (ctype_upper($mensagem[$j])) {
            $resposta .= '#' . $teclas[strtolower($mensagem[$j])];
        } else {
            // Insere o pressionamento da tecla correspondente
            $resposta .= $teclas[$mensagem[$j]];
        }
    }
    
    // Exibe a resposta para a mensagem atual
    echo $resposta . "\n";
}

?>
