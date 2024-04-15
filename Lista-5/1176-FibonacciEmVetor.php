<?php
// Inicialização da sequência de Fibonacci com os primeiros dois números
$fibonacci = [0, 1];

// Variáveis para armazenar os dois números anteriores da sequência
$num1 = 0;
$num2 = 1;

// Geração dos números da sequência até o 100º termo
for ($i = 0; $i < 100; $i++) {
    // Adiciona o próximo número na sequência
    array_push($fibonacci, $num1 + $num2);

    // Atualiza os dois números anteriores
    $moderador = $num1 + $num2;
    $num1 = $num2;
    $num2 = $moderador;
}

// Leitura do número de consultas
$N = intval(readline());

// Inicialização do array para armazenar as consultas
$consultas = [];

// Leitura das consultas
for ($i = 0; $i < $N; $i++)
    $consultas[] = intval(readline());

// Impressão dos resultados das consultas
foreach ($consultas as $numero)
    echo "Fib($numero) = " . $fibonacci[$numero] . "\n";
?>