<?php
// Leitura do número de casos
$quantidadeCasos = intval(readline());

// Verificação para cada caso
for ($i = 0; $i < $quantidadeCasos; $i++) {
    // Leitura dos valores A e B
    list($valorA, $valorB) = explode(" ", readline());
    
    // Verificação se o tamanho de B é maior que o de A
    if (strlen($valorB) > strlen($valorA))
        echo "nao encaixa\n"; // Exibir "nao encaixa" se o tamanho de B for maior que o de A
    else {
        // Verificação se B encaixa no final de A
        if (substr($valorA, -strlen($valorB), strlen($valorB)) == $valorB)
            echo "encaixa\n"; // Exibir "encaixa" se B encaixar no final de A
        else
            echo "nao encaixa\n"; // Exibir "nao encaixa" caso contrário
    }
}
?>