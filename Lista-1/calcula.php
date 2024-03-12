<?php
function calcularINSS($salario) {
    if ($salario <= 1100) {
        return $salario * 0.075;
    } elseif ($salario <= 2203.48) {
        return $salario * 0.09;
    } elseif ($salario <= 3305.22) {
        return $salario * 0.12;
    } elseif ($salario <= 6433.57) {
        return $salario * 0.14;
    } else {
        return 6433.57 * 0.14;
    }
}

function calcularIRPF($salario, $idade) {
    if ($idade < 65) {
        if ($salario <= 1903.98) {
            return 0;
        } elseif ($salario <= 2826.65) {
            return ($salario * 0.075) - 142.8;
        } elseif ($salario <= 3751.05) {
            return ($salario * 0.15) - 354.8;
        } elseif ($salario <= 4664.68) {
            return ($salario * 0.225) - 636.13;
        } else {
            return ($salario * 0.275) - 869.36;
        }
    } else {
        if ($salario <= 3134.4) {
            return 0;
        } elseif ($salario <= 3761.05) {
            return ($salario * 0.075) - 142.8;
        } elseif ($salario <= 4664.68) {
            return ($salario * 0.15) - 354.8;
        } elseif ($salario <= 5594.92) {
            return ($salario * 0.225) - 636.13;
        } else {
            return ($salario * 0.275) - 869.36;
        }
    }
}

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$salario =  $_GET["salario"];

$inss = calcularINSS($salario);
$irpf = calcularIRPF($salario, $idade);

echo "Nome: $nome\n";
echo "Salário: R$".number_format($salario, 2, ',', '.')."\n";
echo "INSS a pagar: R$".number_format($inss, 2, ',', '.')."\n";
echo "IRPF a pagar: R$".number_format($irpf, 2, ',', '.')."\n";
?>
