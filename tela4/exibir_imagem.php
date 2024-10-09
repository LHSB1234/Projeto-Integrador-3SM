<?php
// Inclua o arquivo de conexão com o banco de dados
include "conexao.php";

// Verifique se o parâmetro ID foi fornecido na URL
if (isset($_GET['id'])) {
    // Prepare a consulta SQL para selecionar o caminho da imagem com base no ID da peça
    $query = "SELECT caminho_imagem FROM pecametalica WHERE ID = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $stmt->bind_result($caminho_imagem);
    $stmt->fetch();
    $stmt->close();

    // Verifique se o caminho da imagem foi encontrado
    if ($caminho_imagem) {
        // Determine o tipo MIME com base na extensão do arquivo
        $tipo_mime = mime_content_type($caminho_imagem);
        header("Content-type: $tipo_mime");

        // Exiba a imagem
        readfile($caminho_imagem);
    } else {
        echo "Imagem não encontrada.";
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    echo "ID da peça não fornecido.";
}
?>
