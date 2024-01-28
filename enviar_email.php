<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $agencia = $_POST["agencia"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    // Codifique os valores para URL
    $agenciaEncoded = urlencode($agencia);
    $nomeEncoded = urlencode($nome);
    $telefoneEncoded = urlencode($telefone);

    // Construa o link com os parâmetros
    $link = "http://localhost:8091/formulario.php?agencia=$agenciaEncoded&nome=$nomeEncoded&telefone=$telefoneEncoded";

    // Configurações de e-mail
    $assunto = "Formulário de Avaliação";

    // Corpo do e-mail
    $mensagem = "Olá $nome,\n\nClique no link abaixo para acessar o formulário de avaliação:\n\n$link";

    // Envie o e-mail
    mail($email, $assunto, $mensagem);

    // Redirecione para a página de confirmação ou exiba uma mensagem
    header("Location: confirmacao_envio.php");
    exit();
}
