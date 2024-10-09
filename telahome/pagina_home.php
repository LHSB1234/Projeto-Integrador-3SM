<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="telahome.css">
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
                <li><a href="#">Perfil</a></li>
                <li><a href="../tela4/pagina_planilha_registros.php">Consulta planilha</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-login">
        <div class="right-login">
            <div class="card-login">
                <h1>Bem-vindo à Página Inicial</h1>


                <h2 class="campo">Opções:</h2>
                <ul class"campo">
                    <li><a class="termos" href="../tela2/pagina_de_cadastro_peca.php"> Cadastro de Peça Metálica </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</body>

</html>