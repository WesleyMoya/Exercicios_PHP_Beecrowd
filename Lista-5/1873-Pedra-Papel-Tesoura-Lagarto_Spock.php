<?php
/**/

$scr = fopen("php://stdin", "r"); // Abre o arquivo de entrada padrão para leitura
$casos = intval(trim(fgets($scr))); // Lê o número de casos de teste

// Array com as regras do jogo
$regras = array(
    array("tesoura", "papel"),
    array("papel", "pedra"),
    array("pedra", "lagarto"),
    array("lagarto", "spock"),
    array("spock", "tesoura"),
    array("tesoura", "lagarto"),
    array("lagarto", "papel"),
    array("papel", "spock"),
    array("spock", "pedra"),
    array("pedra", "tesoura")
);

// Loop para cada caso de teste
for ($i = 0; $i < $casos; $i++) {
    $palavras = explode(" ", trim(fgets($scr))); // Lê as escolhas de Rajesh e Sheldon
    if ($palavras[0] === $palavras[1]) { // Verifica empate
        echo "empate\n";
    } else {
        $primeiro = false; // Variável para verificar se a escolha de Rajesh vence
        foreach ($regras as $r) {
            if ($r[0] === $palavras[0] && $r[1] === $palavras[1]) {
                $primeiro = true; // Rajesh vence
                break;
            }
        }
        
        if ($primeiro) {
            echo "rajesh\n";
        } else {
            echo "sheldon\n";
        }
    }
}

fclose($scr); // Fecha o arquivo de entrada
?>