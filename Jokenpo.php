<?php

function escolherMao() {
    echo "Jogador 1, escolha sua mão:\n";
    echo "1 - Pedra\n";
    echo "2 - Papel\n";
    echo "3 - Tesoura\n";

    $mao = (int)readline("Digite o número correspondente: ");

    // Verifica se a escolha é válida
    if ($mao < 1 || $mao > 3) {
        echo "Escolha inválida! Tente novamente.\n";
        return escolherMao(); // chama a função novamente
    }

    return $mao;
}

// Chamada da função
$maoJogador1 = escolherMao();

// Exibe a escolha
$opcoes = [1 => "Pedra", 2 => "Papel", 3 => "Tesoura"];
echo "Você escolheu: " . $opcoes[$maoJogador1] . "\n";

