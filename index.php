<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Convite para Avaliação</title>
</head>

<body>
    <h1>Convite para Avaliação</h1>
    <form action="enviar_email.php" method="post" id="avaliacaoForm">
        <label for="agencia">Agência:</label>
        <input type="text" name="agencia" required>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>