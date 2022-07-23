<?php $__env->startSection('title'); ?>Геолокция<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <p>
        Выбрать адрес из геолокации, или выбрать адресс вручную
    </p>
    <p>
        <a href="/form/orderYes" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">C геолокацией</a>
    </p>
    <p>
        <a href="/form/orderNo" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Без геолокации</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/selectForm.blade.php ENDPATH**/ ?>