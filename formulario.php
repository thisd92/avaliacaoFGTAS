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
            <label for="agencia">Agencia</label>
            <input type="text" name="agencia" id="agencia" readonly>
        </div>
        <div class="form-control">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" readonly>
        </div>

        <div class="form-control">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" readonly>
        </div>

        <div class="rating-container">
            <h3>Avaliação o atendimento recebido na agência FGTAS/SINE:</h3>
            <div class="av-container" id="atendimento">
                <div class="title-container">
                    <span class="title">Atendimento</span>
                </div>
                <div class="rating">
                    <input type="radio" id="estrela5" name="av-atendimento" value="5">
                    <label for="estrela5"><i class="fas fa-star"></i></label>
                    <input type="radio" id="estrela4" name="av-atendimento" value="4">
                    <label for="estrela4"><i class="fas fa-star"></i></label>
                    <input type="radio" id="estrela3" name="av-atendimento" value="3">
                    <label for="estrela3"><i class="fas fa-star"></i></label>
                    <input type="radio" id="estrela2" name="av-atendimento" value="2">
                    <label for="estrela2"><i class="fas fa-star"></i></label>
                    <input type="radio" id="estrela1" name="av-atendimento" value="1">
                    <label for="estrela1"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <div class="av-container" id="tempo">
                <div class="title-container">
                    <span class="title">Tempo de espera</span>
                </div>
                <div class="rating">
                    <input type="radio" id="av5" name="av-tempo" value="5">
                    <label for="av5"><i class="fas fa-star"></i></label>
                    <input type="radio" id="av4" name="av-tempo" value="4">
                    <label for="av4"><i class="fas fa-star"></i></label>
                    <input type="radio" id="av3" name="av-tempo" value="3">
                    <label for="av3"><i class="fas fa-star"></i></label>
                    <input type="radio" id="av2" name="av-tempo" value="2">
                    <label for="av2"><i class="fas fa-star"></i></label>
                    <input type="radio" id="av1" name="av-tempo" value="1">
                    <label for="av1"><i class="fas fa-star"></i></label>
                </div>
            </div>
        </div>
        <div class="av-container feedback">
            <label for="feedback">Nos dê o seu feedback sobre nosso atendimento</label>
            <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Enviar Avaliação">
        <script src="index.js"></script>
    </form>
</body>

</html>