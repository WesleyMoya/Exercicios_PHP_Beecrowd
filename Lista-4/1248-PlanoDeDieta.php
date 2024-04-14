<?php
function insertionSort(&$array, $tamanho)
{
    for ($i = 1; $i < $tamanho; ++$i) {
        $tmp = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $tmp < $array[$j]) {
            $array[$j + 1] = $array[$j];
            --$j;
        }
        $array[$j + 1] = $tmp;
    }
}

// Leitura do número de casos
$quantidadeCasos = intval(fgets(STDIN));

// Processamento para cada caso
for ($i = 0; $i < $quantidadeCasos; ++$i) {
    // Inicialização dos arrays
    $precisaComer = array_fill(0, 26, 1);
    $naoEstaDieta = array_fill(0, 26, 0);

    // Leitura da dieta e remoção dos espaços antes e depois dos caracteres
    $dieta = rtrim(fgets(STDIN), "\n");
    $tamanhoDieta = strlen($dieta);

    // Leitura das refeições já consumidas e remoção dos espaços antes e depois dos caracteres
    $jaComeu = rtrim(fgets(STDIN), "\n");
    $tamanhoJaComeu = strlen($jaComeu);
    $jaComeu .= rtrim(fgets(STDIN), "\n"); // Adiciona a segunda linha de refeições
    $tamanhoJaComeu = strlen($jaComeu);

    // Atualização do array de alimentos presentes na dieta
    for ($j = 0; $j < $tamanhoDieta; ++$j) {
        $naoEstaDieta[ord($dieta[$j]) - ord('A')] = 1;
    }

    // Verificação de trapaça
    $cheater = 0;
    for ($j = 0; $j < $tamanhoJaComeu && !$cheater; ++$j) {
        $k = ord($jaComeu[$j]) - ord('A');

        if (!($naoEstaDieta[$k] && $precisaComer[$k])) {
            $cheater = 1;
        } else {
            $precisaComer[$k] = 0;
        }
    }

    // Verificação e impressão da dieta válida
    if ($cheater) {
        echo "CHEATER\n";
    } else {
        // Ordenação da dieta
        insertionSort($dieta, $tamanhoDieta);
        $jantar = "";
        for ($j = 0; $j < $tamanhoDieta; ++$j) {
            if ($precisaComer[ord($dieta[$j]) - ord('A')]) {
                $jantar .= $dieta[$j];
            }
        }
        echo $jantar . "\n";
    }
}
?>