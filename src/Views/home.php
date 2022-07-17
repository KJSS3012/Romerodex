<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomeroDex - Início</title>
    <link rel="stylesheet" href="style.css">
</head>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

<body>
    <header class="header-register">
        <img src="../../Config/image/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
        <form action="/logout" method="post">
            <button class="button-h">Sair</button>
        </form>

    </header>
    <main class="main-homepage">
        <section class="section1-homepage">
            <div class="div-s1-homepage">
                <h1>Bem-Vindo a Romerodex, o melhor sistema de registro de romeromons que existe em todo o mundo!</h1>
            </div>
        </section>
        <section class="section2-homepage">
            <div class="div-s2-homepage">
                <button class="button-homepage" onclick="link_list()">Histórico<span class="iconify-inline" data-icon="mdi:pokeball" data-width="38" data-height="38" style="color: #e3293b;"></span></button>
                <button class="button-homepage" onclick="link_register()">Registrar<span class="iconify-inline" data-icon="mdi:pokeball" data-width="38" data-height="38" style="color: #e3293b;"></span></button>
                <button class="button-homepage" onclick="link_owners()">Criadores<span class="iconify-inline" data-icon="mdi:pokeball" data-width="38" data-height="38" style="color: #e3293b;"></span></button>
            </div>
        </section>
    </main>
    <footer class="footer-homepage">
        <div class="div1-f-homepage"></div>
        <div class="div2-f-homepage"></div>
    </footer>
</body>

</html>