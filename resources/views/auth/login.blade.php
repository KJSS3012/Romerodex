
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Login</title>
</head>

<body>
    <section class="section1-login">
        <div class="div1-s1-login">
            <div class="div2-s1-image">
                <img class="login-image" src="../../img/pokeball.png" alt="logo">
            </div>
            <form class="form1-s1-login" action="{{url('/login')}}" method="POST">
                @csrf
                <input type="text" name="nameUser" placeholder="Nome de treinador" autofocus required>
                <input type="password" name="passUser" placeholder="Senha" required>
                <input type="submit" value="Entrar">
            </form>
            <div class="div3-s1-login">
                <p>Não possui uma conta?</p>
                <a href="{{url('/register')}}">Cadastre-se</a>
            </div>
        </div>
    </section>
</body>

</html>