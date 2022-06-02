<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registre seu Romeromon</title>
</head>
<script src="../_js/image.js"></script>

<body class="body-register">
    <header class="header-register">
        <img src="../_image/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
        <button class="button-h" onclick="link_homepage()">Voltar</button>
    </header>
    <main class="main-register">
        <section class="section1-register">
            <div class="div1-s1-register">
                <h1 class="h1-s1-register">Registrar</h1>
            </div>
            <div class="div2-s1-register">
                <form action="../_config/database.php" method="get">
                    <input type="text" name="nt" id="" class="input-s1" placeholder="Nome do Treinador">
                    <input type="text" name="nr" id="" class="input-s1" placeholder="Nome do Romeromon">
                    <input type="text" name="dc" id="" placeholder="Descrição" class="input2-s1">
                    <label for="imageRomero" class="label-register">Anexar Imagem</label>
                    <input type="file" name="im" id="imageRomero">
                    <button class="button-register">Enviar</button>
                </form>
            </div>
        </section>
        <section class="section2-register">
            <div class="div1-s2-register">
                <h1 class="h1-s2-register">Romeromon</h1>
            </div>
            <div class="div2-s2-register"></div>
            <div class="div3-s2-register">
                <img src="#" alt="" id="image">
            </div>
        </section>
    </main>
</body>

</html>