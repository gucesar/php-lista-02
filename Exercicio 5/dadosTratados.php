<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $jogadaUsuario = $_POST['jogada'];

    // Definindo a jogada do computador aleatoriamente
    $opcoes = ['pedra', 'papel', 'tesoura'];
    $jogadaComputador = $opcoes[array_rand($opcoes)];

    // Determinando o resultado
    if ($jogadaUsuario === $jogadaComputador) {
        $resultado = "Empate!";
    } elseif (
        ($jogadaUsuario === 'pedra' && $jogadaComputador === 'tesoura') ||
        ($jogadaUsuario === 'papel' && $jogadaComputador === 'pedra') ||
        ($jogadaUsuario === 'tesoura' && $jogadaComputador === 'papel')
    ) {
        $resultado = "Parabéns $nome, você ganhou!";
    } else {
        $resultado = "Que pena $nome, você perdeu!";
    }
    $imagens = [
        'pedra' => 'pedra.png',
        'papel' => 'papel.png',
        'tesoura' => 'tesoura.png'
    ];

    // Exibindo as imagens das escolhas e o resultado
    echo "<h2>Resultado do Jogo</h2>";
    echo "<p>$nome jogou: <img src='" . $imagens[$jogadaUsuario] . "' alt='$jogadaUsuario' style='width:100px;'></p>";
    echo "<p>Computador jogou: <img src='" . $imagens[$jogadaComputador] . "' alt='$jogadaComputador' style='width:100px;'></p>";
    echo "<h3>$resultado</h3>";
}
?>