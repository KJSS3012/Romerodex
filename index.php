<link rel="stylesheet" href="_paginas/style.css">
<link rel="shortcut icon" href="_image/Romeroball_icon.png" type="image/x-icon">
<script src="/_js/path.js"></script>
<?php
$uri = $_SERVER['REQUEST_URI'];
$caminho = require __DIR__ . "/_config/rotas.php";

foreach ($caminho as $rota => $arquivo) {
    if ($uri === $rota) {
        include __DIR__ . $arquivo;
        exit();
    }
}
include(__DIR__ . "/_paginas/error.php");
?>