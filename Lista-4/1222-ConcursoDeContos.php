<?php
// Loop para continuar a leitura até que não haja mais entradas
while (fscanf(STDIN, "%d%d%d", $N, $L, $C) !== false) {
    // Leitura do conto
    $conto = fgets(STDIN);
    // Tamanho do conto (ignorando o caractere de nova linha)
    $tamanhoConto = strlen($conto) - 1;
    // Variáveis para contar caracteres, linhas e páginas
    $caracteres = $salvamento = 0;
    $linhas = $paginas = 1;

    // Loop para percorrer o conto
    for ($i = 0; $i < $tamanhoConto; ++$i) {
        // Verificação de espaços para salvamento da posição
        if ($i && $conto[$i - 1] == ' ')
            $salvamento = $i;

        // Verificação do limite de caracteres por linha
        if ($caracteres == $C) {
            ++$linhas;
            // Resetar contador de caracteres se o próximo caractere for espaço
            if ($conto[$i] == ' ')
                $caracteres = 0;
            else
                $caracteres = $i - $salvamento + 1;
        } else
            ++$caracteres; // Incrementar contador de caracteres
    }

    // Cálculo do número de páginas necessárias
    $paginas = ceil($linhas / $L); // Arredonda para cima a divisão

    // Impressão do número de páginas
    printf("%d\n", $paginas);
}
?>