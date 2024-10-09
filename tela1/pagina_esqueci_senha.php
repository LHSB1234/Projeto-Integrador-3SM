<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>

    <link rel="stylesheet" href="tela1.css">

</head>

<body>
    <div class="main-login">
        <div class="center-login">
            <div class="card-login">
                <h1>Problemas para entrar?</h1>
                <p>Insira seu numero de telefone abaixo para recuperar sua senha:</p>
                <form action="recuperarSenha.php" method="post" class="textfield">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="(xx) xxxxx-xxxx" required>
                    <button type="submit" class="botao">Recuperar Senha</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>