<?php $__env->startSection('title'); ?>Поездка<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <p>
            <div class="alert alert-info">
            <?php echo e($data->backyard); ?>

            <?php echo e($data->street); ?>

            <?php echo e($data->home); ?>

        </div>
        </p>
        <p>
            <div class="alert alert-info">
            <?php echo e($data->backyardOld); ?>

            <?php echo e($data->streetOld); ?>

            <?php echo e($data->homeOld); ?>

        </div>
        </p>
        <a href="<?php echo e(route('finishDriver')); ?>">Я приехал</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/go.blade.php ENDPATH**/ ?>