<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Histórico</title>
</head>

<body>
  <header class="header-list">
    <img src="../../Config/image/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
    <button class="button-h" onclick="link_homepage()">Voltar</button>
  </header>
  <main class="main-list">
    <!-- <img src="" alt=""> -->
    <?php
    session_start();
    $statement = self::$conexao->prepare('SELECT nome FROM Romeromons where user_nome = ' . $_SESSION['user'] . '');
    while ($linha = $statement->fetchArray()) {
      echo '<div class = "div1-m"><p>Romeromon:</span> ' . $linha['NomeDoRomeromon'] . '</p></div>';
    }
    ?>
    <style>
      <?php
      include __DIR__ . "/../../Config/css/style.css";
      ?>
    </style>

    <script>
      <?php
      include __DIR__ . "/../../Config/js/path.js";
      ?>
    </script>
  </main>
  <footer class="footer-list">
    <div class="div1-f-list"></div>
  </footer>
</body>

</html>