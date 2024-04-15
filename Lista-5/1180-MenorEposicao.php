<?php
// Leitura do valor de N
$N = intval(readline());

// Leitura dos valores de X
$X = explode(" ", readline());

// Inicialização do menor valor encontrado e seu índice
$menorValor = 0;
$indiceMenor = 0;

// Loop para encontrar o menor valor e seu índice
for ($i = 0; $i < $N; $i++) {
    // Verificação se é o primeiro elemento
    if ($i == 0) {
        $menorValor = intval($X[$i]);
        $indiceMenor = $i;
    } 
    // Comparação com o menor valor encontrado até agora
    elseif ($X[$i] < $menorValor) {
        $menorValor = intval($X[$i]);
        $indiceMenor = $i;
    }
}

// Impressão do menor valor e seu índice
echo "Menor valor: $menorValor\n";
echo "Posicao: $indiceMenor\n";
?>