<?php

// inicializa as variáveis de contagem
$total_cobaias = 0;
$total_ratos = 0;
$total_sapos = 0;
$total_coelhos = 0;

// lê o número de casos de teste
$casos_teste = intval(fgets(STDIN));

// loop para cada caso de teste
for ($i = 0; $i < $casos_teste; $i++) {
    // lê a quantidade de cobaias e o tipo de cobaia
    $entrada = explode(" ", fgets(STDIN));
    $quantia = intval($entrada[0]);
    $tipo = trim($entrada[1]);

    // incrementa o total de cobaias
    $total_cobaias += $quantia;

    // incrementa o total de acordo com o tipo de cobaia
    switch ($tipo) {
        case 'R':
            $total_ratos += $quantia;
            break;
        case 'S':
            $total_sapos += $quantia;
            break;
        case 'C':
            $total_coelhos += $quantia;
            break;
        default:
            break;
    }
}

// calcula os percentuais
$percentual_ratos = ($total_ratos / $total_cobaias) * 100;
$percentual_sapos = ($total_sapos / $total_cobaias) * 100;
$percentual_coelhos = ($total_coelhos / $total_cobaias) * 100;

echo "Total: $total_cobaias cobaias\n";
echo "Total de coelhos: $total_coelhos\n";
echo "Total de ratos: $total_ratos\n";
echo "Total de sapos: $total_sapos\n";
echo "Percentual de coelhos: " . number_format($percentual_coelhos, 2) . " %\n";
echo "Percentual de ratos: " . number_format($percentual_ratos, 2) . " %\n";
echo "Percentual de sapos: " . number_format($percentual_sapos, 2) . " %\n";

?>