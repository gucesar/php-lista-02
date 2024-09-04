<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo Jokenpô</title>
</head>
<body>
    <h2>Jogo Jokenpô</h2>
    <form method="POST" action="dadosTratados.php">
        <label for="nome">Seu Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="jogada">Escolha sua jogada:</label>
        <select id="jogada" name="jogada" required>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select><br><br>
        
        <input type="submit" value="Jogar!">
    </form>
</body>
</html>
    