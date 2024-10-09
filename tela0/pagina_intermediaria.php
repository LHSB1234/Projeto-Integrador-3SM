<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Intermediária</title>

  <link rel="stylesheet" href="tela0.css">

</head>

<body>
  <div class="main-login">
    <div class="center-login">
      <div class="card-login">
        <h1>Página Intermediária</h1>

        <?php
        // Verifica se o RF foi passado como parâmetro na URL
        if (isset($_GET['rf'])) {
          // Obtém o RF da URL
          $rf = $_GET['rf'];
          // Exibe o RF aleatório gerado
          echo "<p>Esse é o seu RF para Login: $rf</p>";
        } else {
          echo "Erro: RF não encontrado.";
        }
        ?>

        <form action="../tela1/pagina_de_login.php" method="post">
          <button type="submit">Continuar para Login</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>