

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <header class="header-register">
        <img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="<?php echo e(url('/home')); ?>">
        <form action="<?php echo e(url('/logout')); ?>" method="post">
            <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kaiqu\Desktop\Romerodex\resources\views/home.blade.php ENDPATH**/ ?>