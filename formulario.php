<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Avaliação</title>
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            width: 30px;
            height: 30px;
            background-color: #ddd;
            margin: 0 4px;
            text-align: center;
            line-height: 30px;
        }

        .rating input:checked+label,
        .rating input:checked~label:hover,
        .rating input:checked~label:hover~label {
            background-color: #f90;
        }
    </style>
</head>

<body>
    <h1>Formulário de Avaliação</h1>
    <form action="processar_formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="numero_usuario">Número do Usuário:</label>
        <input type="number" name="numero_usuario" required>

        <p>Avaliação:</p>
        <div class="rating">
            <input type="radio" id="estrela5" name="avaliacao" value="5">
            <label for="estrela5">5</label>
            <input type="radio" id="estrela4" name="avaliacao" value="4">
            <label for="estrela4">4</label>
            <input type="radio" id="estrela3" name="avaliacao" value="3">
            <label for="estrela3">3</label>
            <input type="radio" id="estrela2" name="avaliacao" value="2">
            <label for="estrela2">2</label>
            <input type="radio" id="estrela1" name="avaliacao" value="1">
            <label for="estrela1">1</label>
        </div>

        <input type="submit" value="Enviar Avaliação">
    </form>
</body>

</html>