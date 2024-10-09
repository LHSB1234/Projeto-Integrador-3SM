<?php
$server = "localhost";  // Host do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "mydb"; // Nome do banco de dados

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Recupera os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

// Gerar um RF aleatório de 4 a 8 caracteres
$rf = substr(str_shuffle("0123456789"), 0, rand(4, 8));

// Consulta SQL para inserir o usuário no banco de dados
$sql = "INSERT INTO usuario (rf, nome, telefone, senha) VALUES ('$rf', '$nome', '$telefone', '$senha')";

// Executa a consulta
if ($conexao->query($sql) === TRUE) {
    // Redireciona o usuário para a página de login
    header("Location: pagina_intermediaria.php?rf=$rf");
    exit(); // Certifique-se de sair do script após o redirecionamento
} else {
    echo "Erro ao cadastrar o usuário: " . $conexao->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();

?>