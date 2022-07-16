<link rel="stylesheet" href="_paginas/style.css">
<link rel="shortcut icon" href="_image/Romeroball_icon.png" type="image/x-icon">
<script src="/_js/path.js"></script>


<?php

require __DIR__ . '/vendor/autoload.php';

use Cfhjk\Romerodex\App\Application;

//carregando as rotas da aplicação
$router = require_once __DIR__ . '/web.php';

//criando conexao e tabelas no banco
require_once __DIR__ . '/database.php';

$app = new Application($router);

//recebe requisição e retorna página
$app->send();
