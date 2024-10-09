<?php
// Configurações do banco de dados
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
$rf = $_POST['rf'];
$senha = $_POST['senha'];

// Consulta SQL para verificar se o usuário existe no banco de dados
$sql = "SELECT * FROM usuario WHERE rf = '$rf' AND senha = '$senha'";

// Executa a consulta
$resultado = $conexao->query($sql);

// Verifica se houve resultados
if ($resultado->num_rows > 0) {
    // Usuário autenticado, grava as informações na sessão e redireciona para a página de sucesso
    session_start();
    $usuario = $resultado->fetch_assoc();
    $_SESSION['nome_completo'] = $usuario['nome'];
    $_SESSION['rf'] = $usuario['rf'];
    header("Location: pagina_de_sucesso.php");
} else {
    // Usuário não encontrado, redireciona para a página de erro
    header("Location: pagina_de_erro.php");
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
