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
    <img src="../_image/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
    <button class="button-h" onclick="link_homepage()">Voltar</button>
  </header>
  <main class="main-list">
    <!-- <img src="" alt=""> -->
    <?php
    $db = require(__DIR__ . '/../_config/database.php');
    $resultado = $db->query('SELECT * FROM Romeromons');
    while ($linha = $resultado->fetchArray()) {
      echo '<div class = "div1-m"><p class = "p-div1-m"><span class = "bold">Treinador:</span> ' . $linha['NomeDoTreinador'] . '<br/><span class = "bold">Romeromon:</span> ' . $linha['NomeDoRomeromon'] . '</p></div>';
    }
    ?>
    <style>
      <?php
      include __DIR__ . "/../_paginas/style.css";
      ?>
    </style>

    <script>
      <?php
      include __DIR__ . "/../_js/path.js";
      ?>
    </script>
  </main>
  <footer class="footer-list">
    <div class="div1-f-list"></div>
  </footer>
</body>

</html>