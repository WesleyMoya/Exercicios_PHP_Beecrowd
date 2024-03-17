<?php

// inicializa as variáveis de contagem
$grenais = 0;
$vitorias_inter = 0;
$vitorias_gremio = 0;
$empates = 0;

// loop principal para ler os resultados dos GRENAIS
while (true) {
    // lê os gols marcados pelo Inter e pelo Grêmio
    $entrada = explode(" ", fgets(STDIN));
    $gols_inter = intval($entrada[0]);
    $gols_gremio = intval($entrada[1]);

    // incrementa o número de GRENAIS
    $grenais++;

    // verifica quem venceu o GRENAL ou se houve empate
    if ($gols_inter > $gols_gremio) {
        $vitorias_inter++;
    } elseif ($gols_gremio > $gols_inter) {
        $vitorias_gremio++;
    } else {
        $empates++;
    }

    // pergunta se deseja continuar
    echo "Novo grenal (1-sim 2-nao)\n";
    $continuar = intval(fgets(STDIN));

    // verifica se deve continuar ou encerrar
    if ($continuar != 1) {
        break;
    }
}

// imprime as estatísticas
echo "$grenais grenais\n";
echo "Inter:$vitorias_inter\n";
echo "Gremio:$vitorias_gremio\n";
echo "Empates:$empates\n";

// determina o vencedor ou se houve empate
if ($vitorias_inter > $vitorias_gremio) {
    echo "Inter venceu mais\n";
} elseif ($vitorias_gremio > $vitorias_inter) {
    echo "Gremio venceu mais\n";
} else {
    echo "Nao houve vencedor\n";
}

?>