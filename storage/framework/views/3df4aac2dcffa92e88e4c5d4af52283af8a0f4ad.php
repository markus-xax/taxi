<?php $__env->startSection('title'); ?>Обновить<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <p class="text-center">
        Что бы загрузить все заказы - нажмите на книпку ниже.
    </p>
    <p class="text-center">
    <a class="btn btn-dark" href="<?php echo e(route('homeDriverAll')); ?>" role="button">Обновить</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/refresh.blade.php ENDPATH**/ ?>