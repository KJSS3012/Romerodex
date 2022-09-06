

<?php $__env->startSection('title', 'Cadastre-se'); ?>

<?php $__env->startSection('content'); ?>
    <section class="section-register">
        <div class="section_div-register">
            <div class="section_div_image-register">
                <img class="section_div_image_pokeball-register" src="../../img/pokeball.png" alt="logo">
            </div>
            <form class="section_div_form-register" action="<?php echo e(url('/register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="name" placeholder="Seu nome de treinador" autofocus required>
                <input type="email" name="email" placeholder="Seu email" required>
                <input type="password" name="password" placeholder="Sua senha" required minlength="8">
                <input type="password" name="password_confirmation" placeholder="Confirmar senha" required minlength="8">

                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kaiqu\Desktop\Romerodex\resources\views/auth/register.blade.php ENDPATH**/ ?>