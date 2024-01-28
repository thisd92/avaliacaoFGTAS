<?php
// Parâmetros de conexão com o banco de dados
$host = "localhost";
$usuario = "root";
$senha = "123456";
$nomeBanco = "db_teste";

// Conectar ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $nomeBanco);

// Verificar a conexão
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
