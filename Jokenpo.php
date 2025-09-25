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

// Jogadores escolhem suas mãos
$maoJogador1 = escolherMao(1);
$maoJogador2 = escolherMao(2);

// Array para exibir o nome da mão
$opcoes = [1 => "Pedra", 2 => "Papel", 3 => "Tesoura"];

echo "\nJogador 1 escolheu: " . $opcoes[$maoJogador1] . "\n";
echo "Jogador 2 escolheu: " . $opcoes[$maoJogador2] . "\n";

// Decide o vencedor
if ($maoJogador1 == $maoJogador2) {
    echo "Empate!\n";
} elseif (
    ($maoJogador1 == 1 && $maoJogador2 == 3) ||
    ($maoJogador1 == 2 && $maoJogador2 == 1) ||
    ($maoJogador1 == 3 && $maoJogador2 == 2)
) {
    echo "Jogador 1 venceu!\n";
} else {
    echo "Jogador 2 venceu!\n";
}