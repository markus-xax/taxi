<?php $__env->startSection('title'); ?>Ожидание<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
    <p>
        <b>Ищем лучшего водителя</b>
    </p>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-success">
        Водитель <?php echo e($el->name); ?> свободен
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/waight.blade.php ENDPATH**/ ?>