<link rel="stylesheet" href="../_paginas/style.css">
<script src="/_js/path.js"></script>
<?php
    $uri = $_SERVER['REQUEST_URI'];
    $caminho = require __DIR__ . "/rotas.php";

    foreach ($caminho as $rota => $arquivo) {
        if ($uri === $rota) {
            include __DIR__ . $arquivo;
            exit();
        }
    }
    
?>