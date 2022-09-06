

<?php $__env->startSection('title', 'Histórico'); ?>

<?php $__env->startSection('content'); ?>
	<header class="header-list">
		<img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
		<button class="button-h" onclick="link_homepage()">Voltar</button>
	</header>

	<main class="main-list">
		<?php $__currentLoopData = $romeromons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $romeros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($romeros->rom_use_id == auth()->user()->id): ?>
				<div class="div1-m">
					<p class="div1-m"><?php echo e($romeros->rom_name); ?></p>
				</div>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</main>	

	<footer class="footer-list">
		<div class="div1-f-list"></div>
	</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kaiqu\Desktop\Romerodex\resources\views/list.blade.php ENDPATH**/ ?>