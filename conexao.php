<?php

// Defina as credenciais do seu banco de dados
$server = "localhost";  // Host do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "mydb"; // Nome do banco de dados

// Crie a conexão com o banco de dados
$conexao = mysqli_connect($server, $usuario, $senha);
$db = mysqli_select_db($conexao, $banco);

// Verifique se a conexão foi bem-sucedida
if ($conexao && $db) {
    echo "Conectado com sucesso";
} else {
    echo "Falha na conexão";
}

?>