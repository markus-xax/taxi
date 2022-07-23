<?php $__env->startSection('title'); ?>Поездка<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="alert alert-info">
            <h3>Город: <?php echo e($data->backyard); ?></h3>
            <h5>Улица: <?php echo e($data->street); ?></h5>
            <h5>Дом: <?php echo e($data->home); ?></h5>
            <small> Пассажиры: <?php echo e($data->amountH); ?></small>
            <small>Дети: <?php echo e($data->amountC); ?></small>
            <h3>Город прибытия: <?php echo e($data->backyard); ?></h3>
            <h3>Улица: <?php echo e($data->streetOld); ?></h3>
            <h3>Дом: <?php echo e($data->homeOld); ?></h3>
        </div>
        <a href="/home/driver" class="btn btn-secondary btn-lg">Я приехал</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/go.blade.php ENDPATH**/ ?>