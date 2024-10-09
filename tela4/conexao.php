<?php
// Defina as credenciais do seu banco de dados

// Defina as credenciais do seu banco de dados
$server = "localhost";  // Host do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "mydb"; // Nome do banco de dados


// Crie a conexão com o banco de dados
$conexao = mysqli_connect($server, $usuario, $senha, $banco);

// Verifique se a conexão foi bem-sucedida
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
