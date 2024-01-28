<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("conexao.php");

    // Função para limpar e validar o telefone
    function limparValidarTelefone($telefone)
    {
        $telefoneLimpo = preg_replace("/[^\d]/", "", $telefone);
        if (strlen($telefoneLimpo) === 11) {
            return $telefoneLimpo;
        } else {
            return false;
        }
    }

    // Recupere os dados do formulário
    $agencia = $_POST["agencia"];
    $nome = $_POST["nome"];

    // Limpar e validar o telefone
    $telefone = limparValidarTelefone($_POST["telefone"]);
    if (!$telefone) {
        die("Telefone inválido.");
    }

    // Avaliações devem ser números inteiros entre 1 e 5
    $av_atendimento = filter_var($_POST["av-atendimento"], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 5)));
    $av_tempo = filter_var($_POST["av-tempo"], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 5)));

    $feedback = htmlspecialchars($_POST["feedback"]);

    // Verifique se os valores de avaliação são válidos
    if ($av_atendimento === false || $av_tempo === false) {
        die("Avaliações inválidas.");
    }

    $sql = "INSERT INTO avaliacoes (agencia, nome, telefone, av_atendimento, av_tempo, feedback) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($stmt, "sssiis", $agencia, $nome, $telefone, $av_atendimento, $av_tempo, $feedback);

    // Executar a consulta
    mysqli_stmt_execute($stmt);

    // Fechar a consulta e a conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conexao);

    // Exemplo simples de exibição dos resultados
    echo "<h1>Avaliação Recebida</h1>";
    echo "<p>Agência: $agencia</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Número do Usuário: $telefone</p>";
    echo "<p>Avaliação Atendimento: $av_atendimento estrela(s)</p>";
    echo "<p>Avaliação Tempo: $av_tempo estrela(s)</p>";
    echo "<p>Feedback: $feedback </p>";
} else {
    // Redirecione para a página inicial se o formulário não for enviado corretamente
    header("Location: index.php");
    exit();
}
