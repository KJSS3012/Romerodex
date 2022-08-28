<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <section class="section-register">
        <div class="section_div-register">
            <div class="section_div_image-register">
                <img class="section_div_image_pokeball-register" src="../../img/pokeball.png" alt="logo">
            </div>
            <form class="section_div_form-register" action="{{url('/register')}}" method="POST">
                @csrf
                <input type="text" name="nameUser" placeholder="Seu nome de treinador" autofocus required>
                <input type="email" name="emailUser" placeholder="Seu email" required>
                <input type="password" name="passUser" placeholder="Sua senha" required>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
</body>

</html>