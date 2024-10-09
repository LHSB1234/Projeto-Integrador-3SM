<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Peça Metálica</title>


    <link rel="stylesheet" href="tela2.css">
    <script defer src="script.js"></script>
</head>

<body>
    <header class="header1">
        <nav class="nav">

            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="logo"
                viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
            </svg>
            <div>
                <?php
                // Inicia a sessão
                session_start();

                // Verifica se as informações do usuário estão na sessão
                if (isset($_SESSION['nome_completo']) && isset($_SESSION['rf'])) {
                    $nome_completo = $_SESSION['nome_completo'];
                    $rf = $_SESSION['rf'];
                    // Exibe o cabeçalho personalizado com nome completo e RF
                    echo "<div class='header'>";
                    echo "<p>$nome_completo</p>";
                    echo "<p>RF: $rf</p>";
                    echo "</div>";
                } else {
                    // Se as informações do usuário não estiverem na sessão, redireciona para a página de login
                    header("Location: pagina_de_login.php");
                    exit(); // Garante que o script seja encerrado após o redirecionamento
                }
                ?>
            </div>
            <button class="hamburger"></button>
            <ul class="nav-list">
                <li><a href="../telahome/pagina_home.php">Perfil</a></li>
                <li><a href="../tela4/pagina_planilha_registros.php">Consulta planilha</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-login">
        <div class="right-login">
            <div class="card-login">

                <h1>Cadastro de Peça Metálica</h1>

                <form action="cadastrarPeca.php" method="post" enctype="multipart/form-data">
                    <section>
                        <h3>Dados da Peça</h3>
                        <div class="campo">
                            <label for="codigo">Código de tipagem:</label>
                            <input type="text" id="codigo" name="codigo" maxlength="50" required>
                        </div>
                        <div class="campo">
                            <label for="descricao">Descrição:</label>
                            <textarea id="descricao" name="descricao" rows="4" cols="50" required></textarea>
                        </div>
                        <div class="campo">
                            <label for="imagem">Anexar Imagem:</label>
                            <input type="file" id="imagem" name="imagem" accept="image/jpeg, image/png" required>
                        </div>
                        <div class="campo">
                            <label for="modelo">Modelo:</label>
                            <input type="text" id="modelo" name="modelo" maxlength="50" required>
                        </div>
                        <div class="campo">
                            <label for="dimensoes">Dimensões (cm):</label>
                            <input type="text" id="dimensoes" name="dimensoes" maxlength="100" required>
                        </div>
                        <div class="campo">
                            <label for="peso">Peso (em kg):</label>
                            <input type="number" step="0.01" id="peso" name="peso" required>
                        </div>
                    </section>
                    <br>
                    <button class="btn-success" type="submit">Cadastrar</button>

                    <a class="btn-success2" href="../telahome/pagina_home.php"><button class="btn-success2"
                            type="button">Voltar</button></a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>