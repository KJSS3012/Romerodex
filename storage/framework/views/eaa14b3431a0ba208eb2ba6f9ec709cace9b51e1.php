<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

<body>
    <header class="header-register">
        <img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
        <form action="/logout" method="post">
            <button class="button-h">Sair</button>
        </form>

    </header>
    <main class="main-homepage">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="footer-homepage">
        <div class="div1-f-homepage"></div>
        <div class="div2-f-homepage"></div>
    </footer>
</body>

</html><?php /**PATH C:\Users\kaiqu\Desktop\Romerodex\Romerodex\resources\views/layouts/default.blade.php ENDPATH**/ ?>