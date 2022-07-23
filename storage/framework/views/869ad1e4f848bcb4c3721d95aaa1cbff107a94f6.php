<?php $__env->startSection('title'); ?>Ожидание<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
    <p>
        <h3>Ищем лучшего водителя</h3>
        <p><small>При принятии заказа вас перенаправит на старницу поезки, ожидайте</small></p>
    </p>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <div class="alert alert-info">
            Водитель <b><?php echo e($driver->name); ?></b> свободен
            </div>
        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/waight.blade.php ENDPATH**/ ?>