<?php
//Ler o valor de ponto flutuante N
$valor = floatval(readline());

//Convertendo o valor para centavos
$valor_centavos = intval($valor * 100);

//Inicializar as notas e moedas possíveis em centavos
$notas_centavos = [10000, 5000, 2000, 1000, 500, 200]; // Notas em centavos
$moedas_centavos = [100, 50, 25, 10, 5, 1]; // Moedas em centavos

//Inicializar variáveis para contar a quantidade de notas e moedas
$quantidade_notas = [];
$quantidade_moedas = [];

//Calcular a quantidade mínima de notas e moedas
foreach ($notas_centavos as $nota) {
    $quantidade = intval($valor_centavos / $nota);
    $quantidade_notas[$nota] = $quantidade;
    $valor_centavos -= $quantidade * $nota;
}

foreach ($moedas_centavos as $moeda) {
    $quantidade = intval($valor_centavos / $moeda);
    $quantidade_moedas[$moeda] = $quantidade;
    $valor_centavos -= $quantidade * $moeda;
}

//Imprimir a relação de notas e moedas necessárias
echo "NOTAS:\n";
foreach ($quantidade_notas as $nota => $quantidade) {
    echo $quantidade . " nota(s) de R$ " . number_format($nota / 100, 2, '.', '') . "\n";
}

echo "MOEDAS:\n";
foreach ($quantidade_moedas as $moeda => $quantidade) {
    echo $quantidade . " moeda(s) de R$ " . number_format($moeda / 100, 2, '.', '') . "\n";
}
?>