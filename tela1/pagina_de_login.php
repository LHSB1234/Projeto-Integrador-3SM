<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuário</title>
    <link rel="stylesheet" href="tela1.css">
</head>

<body>
    <div class="main-login">
        <div class="center-login">
            <div class="card-login">
                <h1>TypeEase</h1>
                <h2>Login do Usuário</h2>
                <form action="loginUsuario.php" method="post">
                    <section>
                        <h3>Dados de Acesso</h3>
                        <div class="textfield">
                            <label for="rf">RF:</label>
                            <input type="text" id="rf" name="rf" required>
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="senha" required>
                        </div>
                    </section>
                    <button type="submit">Entrar</button>
                </form>
                <br>
                <a class="termos" href="pagina_esqueci_senha.php">Esqueceu a senha?</a>
            </div>
        </div>
    </div>
</body>

</html>