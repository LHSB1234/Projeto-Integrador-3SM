<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro do Usuário</title>

  <link rel="stylesheet" href="tela0.css">

</head>

<body>
  <div class="main-login">
    <div class="center-login">
      <div class="card-login">

        <h1> TypeEase </h1>

        <h2>Cadastro do Usuário</h2>

        <form action="cadastroUsuario.php" method="post">

          <section>
            <h3>Dados Pessoais</h3>
            <div class="textfield">
              <label for="nome">Nome Completo:</label>
              <input type="text" id="nome" name="nome" required>
            </div>
            <div class="textfield">
              <label for="telefone">Telefone:</label>
              <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="textfield">
              <label for="senha">Senha:</label>
              <input type="password" id="senha" name="senha" required>
            </div>
          </section>

          <button type="submit"> Cadastrar </button>

          <br>

          <input type="checkbox" required class="termos"> Li e estou de acordo com os <a class="termos"
            href="termos.php">Termos de Uso
            e Política de Privacidade</a>

        </form>
      </div>
    </div>
  </div>
</body>

</html>