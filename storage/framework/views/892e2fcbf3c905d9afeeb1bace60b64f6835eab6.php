<?php $__env->startSection('title'); ?>Авторизация<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    Авторизация:
    <div class="container">
        <?php echo $__env->make('forms.LKform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/LKautorize.blade.php ENDPATH**/ ?>