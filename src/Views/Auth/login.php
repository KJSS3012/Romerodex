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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="section1-login">
        <div class="div1-s1-login">
            <div class="div2-s1-login">
                <img src="images/logo.png" alt="Logo" class="image-login">
            </div>

            <form method="POST" action="">
                <input type="text" name="name" placeholder="Nome de Treinador" autofocus required>
                <input type="password" name="pass" placeholder="Senha" required>
                <input type="submit" value="Entrar">
            </form>

            <div class="div3-s1-login">
                <p>Ainda não tem uma conta?</p>
                <a href="#">Criar conta</a>
            </div>
        </div>
    </section>
</body>

</html>