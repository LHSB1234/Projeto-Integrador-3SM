<?php

echo '<style>';
echo 'body { text-align: center; font-family: sans-serif; text-align: center; }';
echo '</style>';


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

// Recupera o número de telefone do formulário
$telefone = $_POST['telefone'];

// Consulta SQL para verificar se o número de telefone existe no banco de dados
$sql = "SELECT * FROM usuario WHERE telefone = '$telefone'";

// Executa a consulta
$resultado = $conexao->query($sql);

// Verifica se houve resultados
if ($resultado->num_rows > 0) {
    // Aqui você pode implementar a lógica para recuperar a senha e enviá-la para o usuário
    // Por exemplo, você pode enviar um sms com a senha recuperada
    // Por simplicidade, vamos apenas exibir a senha na tela (o que não é recomendado em um ambiente real)
    $usuario = $resultado->fetch_assoc();
    $senha_recuperada = $usuario['senha'];
    echo "Sua senha é: $senha_recuperada";
    echo "<br>";
    echo '<a href="pagina_de_login.php">Voltar para página de login</a>';
} else {
    // Caso o número de telefone não seja encontrado no banco de dados
    echo "Número de telefone não encontrado. Por favor, verifique o número e tente novamente.";
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
