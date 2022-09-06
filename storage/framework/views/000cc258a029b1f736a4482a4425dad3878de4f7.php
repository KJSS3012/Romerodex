

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <section class="section1-login">
        <div class="div1-s1-login">
            <div class="div2-s1-image">
                <img class="login-image" src="../../img/pokeball.png" alt="logo">
            </div>
            <form class="form1-s1-login" action="<?php echo e(url('/login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="email" name="email" placeholder="Email do treinador" autofocus required>
                <input type="password" name="password" placeholder="Senha" required minlength="8">
                <input type="submit" value="Entrar">
            </form>
            <div class="div3-s1-login">
                <p>Não possui uma conta?</p>
                <a href="<?php echo e(url('/register')); ?>">Cadastre-se</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kaiqu\Desktop\Romerodex\resources\views/auth/login.blade.php ENDPATH**/ ?>