<?php
/*Uma instituição de ensino lisboeta tem como prática para atribuição de senha de acesso ao portal acadêmico utilizar o RA (registro acadêmico) do aluno. Nesta instituição os RA's são strings de 20 caracteres iniciados sempre pelos caracteres "RA" e seguidos por 18 dígitos numéricos. por exemplo: RA000000000000012340. Estes identificadores são gerados automaticamente pelo sistema de matrículas e são formados por três partes principais: (a) iniciados pelos caracteres "RA", (b) seguidos por Z digitos zeros formatadores de posição (onde, 0 <= Z <= 17), e por fim, (c) o número identificador do aluno propriamente dito, considerando os X números mais a direita do RA não iniciados por zero (onde, 1 <= X <= 18).   
 

Entrada
A primeira linha de entrada é um valor inteiro N (onde, 1 <= N <= 1000) que representa a quantidade de RA's que deve ser considerada pelo programa. As N seguintes linhas representam, cada uma, strings, de no máximo 100 caracteres, que representam os RA's enviados pelo sistema de matrícula.
 

Saída
As saídas válidas para o programa são: a apresentação da senha provisória ou a indicação de "INVALID DATA". A senha provisória é formada pelos X caracteres númericos não iniciados em 0 mais a direita da string, por exemplo: para o identificador "RA000000000000012340" a senha provisória deve ser "12340". Caso a string recebida não esteja de acordo com as regras de formação, o programa deve indicar "INVALID DATA".*/

// Função para verificar se a senha é válida
function senhaFixa($str) {
    $tam = strlen($str);

    if ($tam != 20) {
        return false; // Retorna falso se o tamanho não for 20
    }

    if ($str[0] != 'R' || $str[1] != 'A') {
        return false; // Retorna falso se não começar com "RA"
    }

    for ($i = 2; $i < $tam; $i++) {
        if (!is_numeric($str[$i])) {
            return false; // Retorna falso se não for um dígito numérico
        }
    }

    return true; // Retorna verdadeiro se a senha for válida
}

// Função para extrair os números da senha
function pegaNum($str, &$str2) {
    $i = 2;

    // Elimina os zeros à esquerda
    while ($str[$i] == '0') {
        $i++;
    }

    // Copia os dígitos restantes
    while (isset($str[$i])) {
        $str2 .= $str[$i++];
    }
}

// Lê o número de casos
$casos = intval(trim(fgets(STDIN)));

while ($casos--) {
    $regAcademico = trim(fgets(STDIN)); // Lê o registro acadêmico

    if (senhaFixa($regAcademico)) { // Verifica se a senha é válida
        $numeros = ""; // Inicializa uma string vazia para armazenar os números
        pegaNum($regAcademico, $numeros); // Extrai os números da senha
        echo $numeros . "\n"; // Imprime a senha provisória
    } else {
        echo "INVALID DATA\n"; // Se a senha não for válida, imprime "INVALID DATA"
    }
}

?>
