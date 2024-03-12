<?php
// Lendo os dados de entrada
list($codigo_peca1, $numero_peca1, $valor_unitario1) = sscanf(readline(), "%d %d %f");
list($codigo_peca2, $numero_peca2, $valor_unitario2) = sscanf(readline(), "%d %d %f");

// Calculando o total a pagar
$total_pagar = ($numero_peca1 * $valor_unitario1) + ($numero_peca2 * $valor_unitario2);

// Imprimindo o total a pagar com duas casas decimais
echo "VALOR A PAGAR: R$ " . number_format($total_pagar, 2, '.', '') . "\n";
?>
