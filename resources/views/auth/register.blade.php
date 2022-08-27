<?php

use Cfhjk\Romerodex\Models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //SALVAR USUÁRIO E REDIRECIONAR PARA DASHBOARD
    if (isset($_POST['nameUser'], $_POST['passUser'])) {

        $user = new User($_POST['nameUser'], $_POST['passUser'], $_POST['emailUser']);

        if (!User::exists($_POST['nameUser'], $_POST['passUser'])) {
            $user->save();

            //registra sessão do usuário
            session_start();
            $_SESSION['user'] = $_POST['nameUser'];
            $_SESSION['id'] = session_id() . $_POST['nameUser'];

            header("Location: /home", true, 302);
            exit;
        } else {
            header("Location: /login", true, 302);
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
    <link rel="stylesheet" href="registerImplementaKaique.css">
</head>

<body>
    <section class="section">
        <div class="section_div">
            <div class="section_div_image">
                <img class="section_div_image_pokeball" src="../../../Config/image/pokeball.png" alt="logo">
            </div>
            <form class="section_div_form" action="/register" method="POST">
                <input type="text" name="nameUser" placeholder="Seu nome de treinador" autofocus required>
                <input type="email" name="emailUser" placeholder="Seu email" required>
                <input type="password" name="passUser" placeholder="Sua senha" required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
</body>

</html>