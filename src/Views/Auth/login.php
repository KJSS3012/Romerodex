<?php

use Cfhjk\Romerodex\App\Application;
use Cfhjk\Romerodex\App\Http\AuthMiddleware;
use Cfhjk\Romerodex\Models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nameUser'], $_POST['passUser'])) {

        $username = $_POST['nameUser'];
        $password = $_POST['passUser'];

        if (User::exists($username, $password)) {

            //iniciar sessão
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['id'] = session_id() . $username;
            header("Location: /home");
            exit;
        } else {
            header("Location: /login", 302);
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <section class="section1-login">
        <div class="div1-s1-login">
            <div class="div2-s1-image">
                <img class="login-image" src="../../../Config/image/pokeball.png" alt="logo">
            </div>
            <form class="form1-s1-login" action="/login" method="POST">
                <input type="text" name="nameUser" placeholder="Nome de treinador" autofocus required>
                <input type="password" name="passUser" placeholder="Senha" required>
                <input type="submit" value="Entrar">
            </form>
            <div class="div3-s1-login">
                <p>Não possui uma conta?</p>
                <a href="/register">Cadastre-se</a>
            </div>
        </div>
    </section>
</body>

</html>