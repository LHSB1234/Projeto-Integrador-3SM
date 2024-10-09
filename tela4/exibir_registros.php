<?php
// Incluir o arquivo de conexão com o banco de dados
include "conexao.php";

// Query para selecionar os registros do usuário atual
$query_registros = "SELECT p.ID, u.rf AS rf_usuario, p.codigo AS codigo_peca, p.modelo AS modelo_peca, p.peso, p.dimensoes, p.hora_anexo, p.descricao, p.imagem
                    FROM pecametalica p
                    INNER JOIN usuario u ON p.rf = u.rf
                    WHERE u.nome = '{$_SESSION['nome_completo']}' AND u.rf = '{$_SESSION['rf']}'";

$resultado_registros = mysqli_query($conexao, $query_registros);

// Verifica se a consulta foi bem-sucedida
if (!$resultado_registros) {
    die("Erro ao buscar registros: " . mysqli_error($conexao));
}

// Início da tabela
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>RF de Quem Marcou</th>";
echo "<th>Código da Peça</th>";
echo "<th>Modelo da Peça</th>";
echo "<th>Peso</th>";
echo "<th>Dimensão</th>";
echo "<th>Hora e Data</th>";
echo "<th>Descrição</th>";
echo "<th id='imagem'>Imagem</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Loop para exibir os registros na tabela
while ($linha_registro = mysqli_fetch_assoc($resultado_registros)) {
    // Exibe uma nova linha na tabela com as informações do registro atual
    echo "<tr>";
    echo "<td>{$linha_registro['rf_usuario']}</td>";
    echo "<td>{$linha_registro['codigo_peca']}</td>";
    echo "<td>{$linha_registro['modelo_peca']}</td>";
    echo "<td>{$linha_registro['peso']}</td>";
    echo "<td>{$linha_registro['dimensoes']}</td>";
    echo "<td>{$linha_registro['hora_anexo']}</td>";
    echo "<td>{$linha_registro['descricao']}</td>";
    echo "<td><a href='exibir_imagem.php?id={$linha_registro['ID']}' target='_blank'>Ver Imagem</a></td>";
    echo "</tr>";
}

// Fim da tabela
echo "</tbody>";
echo "</table>";

// Liberar resultado da consulta
mysqli_free_result($resultado_registros);

// Fechar conexão com o banco de dados
mysqli_close($conexao);
?>
