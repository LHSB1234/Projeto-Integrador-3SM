<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>

    <link rel="stylesheet" href="tela1.css">

</head>

<body>
    <div class="main-login">
        <div class="center-login">
            <div class="card-login">
                <h1>Sucesso</h1>
                <p>Login realizado com sucesso!</p>

                <?php
                session_start();
                if (isset($_SESSION['nome_completo']) && isset($_SESSION['rf'])) {
                    $nome_completo = $_SESSION['nome_completo'];
                    $rf = $_SESSION['rf'];
                    echo "<p>Bem-vindo, $nome_completo (RF: $rf)</p>";
                } else {
                    echo "<p>Falha ao recuperar informações do usuário.</p>";
                }
                ?>

                <a href="../telahome/pagina_home.php"><button>Continuar</button></a>

            </div>
        </div>
    </div>
</body>

</html>