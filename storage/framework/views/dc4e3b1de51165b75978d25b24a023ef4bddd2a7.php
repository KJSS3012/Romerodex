

<?php $__env->startSection('title', 'Registre seu Romeromon'); ?>

<?php $__env->startSection('content'); ?>
    <header class="header-register">
        <img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
        <button class="button-h" onclick="link_homepage()">Voltar</button>
    </header>
    <main class="main-register">
        <section class="section1-register">
            <div class="div1-s1-register">
                <h1 class="h1-s1-register">Registrar</h1>
            </div>
            <div class="div2-s1-register">
                <form action="<?php echo e(url('/romerodex')); ?>" method="POST" class="form-div2-register">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="nr" class="input-s1" placeholder="Nome do Romeromon">
                    <input type="text" name="dc" placeholder="Descrição" class="input2-s1">
                      <select name="rb">
                        <?php $__currentLoopData = $romeroballs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($balls->bal_id); ?>"><?php echo e($balls->bal_romeroball); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
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
                <img src="../img/Romeroju.png" alt="Romeroju" id="image">
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kaiqu\Desktop\Romerodex\resources\views/registerRm.blade.php ENDPATH**/ ?>