<?php
session_start();

// Verifica se foi submetido um formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera o RF do usuário da sessão
    $rf_usuario = $_SESSION['rf'];

    // Recupera os valores do formulário
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $peso = $_POST['peso'];
    $dimensoes = $_POST['dimensoes'];
    $modelo = $_POST['modelo'];

    // Processa a imagem
    $imagem_temp = $_FILES['imagem']['tmp_name'];
    $imagem_nome_original = $_FILES['imagem']['name'];
    $extensao = pathinfo($imagem_nome_original, PATHINFO_EXTENSION);

    // Gerar um nome de arquivo aleatório
    $imagem_nome_aleatorio = uniqid() . '.' . $extensao;

    // Caminho completo para salvar a imagem
    $caminho_imagem = 'C:/xampp/htdocs/www/typeease/imagens/' . $imagem_nome_aleatorio;

    // Salvar a imagem no diretório com o nome aleatório
    if (!move_uploaded_file($imagem_temp, $caminho_imagem)) {
        // Se a imagem não puder ser movida para o diretório, redireciona para uma página de erro
        header("Location: pagina_de_erro.php?erro=upload_falhou");
        exit();
    }

    // Configurações do banco de dados
    $host = "localhost"; // Endereço do servidor
    $usuario_bd = "leo1"; // Nome de usuário do banco de dados
    $senha_bd = "123456"; // Senha do banco de dados
    $banco = "mydb"; // Nome do banco de dados

    // Cria a conexão
    $conexao = new mysqli($host, $usuario_bd, $senha_bd, $banco);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Prepara a consulta SQL para inserir os dados na tabela pecametalica
    $sql = "INSERT INTO pecametalica (codigo, descricao, peso, dimensoes, rf, modelo, caminho_imagem) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepara a instrução
    $stmt = $conexao->prepare($sql);

    // Verifica se a preparação da instrução foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    // Vincula os parâmetros da consulta
    $stmt->bind_param("ssdssss", $codigo, $descricao, $peso, $dimensoes, $rf_usuario, $modelo, $caminho_imagem);

    // Executa a consulta
    if ($stmt->execute()) {
        // Redireciona para alguma página de sucesso após cadastrar a peça
        header("Location: pagina_de_sucesso.php");
        exit();
    } else {
        // Se houver erro na execução da consulta, redireciona para uma página de erro
        header("Location: pagina_de_erro.php");
        exit();
    }

    // Fecha a instrução
    $stmt->close();

    // Fecha a conexão com o banco de dados
    $conexao->close();
} else {
    // Se não foi submetido um formulário, redireciona para uma página de erro
    header("Location: pagina_de_erro.php");
    exit();
}
?>