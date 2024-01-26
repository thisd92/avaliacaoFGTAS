<!-- formulario.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Avaliação</title>
    <script src="https://kit.fontawesome.com/a7fd021888.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Formulário de Avaliação</h1>
    <form action="valida_formulario.php" method="post">
        <div class="form-control">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" disabled>
        </div>

        <div class="form-control">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone do usuário" disabled>
        </div>

        <div class="rating-container">
            <p>Avaliação:</p>
            <div class="rating">
                <input type="radio" id="estrela5" name="avaliacao" value="5">
                <label for="estrela5"><i class="fas fa-star"></i></label>
                <input type="radio" id="estrela4" name="avaliacao" value="4">
                <label for="estrela4"><i class="fas fa-star"></i></label>
                <input type="radio" id="estrela3" name="avaliacao" value="3">
                <label for="estrela3"><i class="fas fa-star"></i></label>
                <input type="radio" id="estrela2" name="avaliacao" value="2">
                <label for="estrela2"><i class="fas fa-star"></i></label>
                <input type="radio" id="estrela1" name="avaliacao" value="1">
                <label for="estrela1"><i class="fas fa-star"></i></label>
            </div>

        </div>

        <input type="submit" value="Enviar Avaliação">
        <script src="index.js"></script>
    </form>
</body>

</html>