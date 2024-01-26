<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $avaliacao = htmlspecialchars($_POST["avaliacao"]);

    // Faça o que quiser com os dados, como salvá-los no banco de dados
    // ou enviar por e-mail.

    // Exemplo simples de exibição dos resultados
    echo "<h1>Avaliação Recebida</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Número do Usuário: $telefone</p>";
    echo "<p>Avaliação: $avaliacao estrela(s)</p>";
} else {
    // Redirecione para a página inicial se o formulário não for enviado corretamente
    header("Location: index.php");
    exit();
}
?>