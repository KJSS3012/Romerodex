<?php

//colocar o método HTTP da requisição
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    //coletando o email e senha do usuário
    $name = $_POST['name'];
    $password = $_POST['pass'];

    //avaliar se o usuário está cadastrado
    if ($name === 'kaiquecabeca@gmail.com' && $pass === '123') {
        session_start();
        $_SESSION['user'] = $email;
        //mostrar a página home.php
        header("Location: ../../home.php");
    } else {
        header("Location: login.php");
        exit;
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
            <form class="form1-s1-login" action="" method="POST">
                <input type="text" name="name" placeholder="Nome de treinador" autofocus required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Entrar">
            </form>
            <div class="div3-s1-login">
                <p>Não possui uma conta?</p>
                <a href="register.php">Cadastre-se</a>
            </div>
        </div>
    </section>
</body>

</html>