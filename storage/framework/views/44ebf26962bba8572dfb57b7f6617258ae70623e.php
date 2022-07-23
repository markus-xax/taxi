<?php $__env->startSection('title'); ?>Главная<?php $__env->stopSection(); ?>
<?php $__env->startSection('nav'); ?>
    <li class="nav-item"><a href="driver/LK" class="nav-link">Личный кабинет</a></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <h1>Все заказы:</h1>
        <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($el->up == 0): ?>
            <div class="alert alert-info">
                <h3>Город: <?php echo e($el->backyard); ?></h3>
                <h5>Улица: <?php echo e($el->street); ?></h5>
                <h5>Дом: <?php echo e($el->home); ?></h5>
                <small> Пассажиры: <?php echo e($el->amountH); ?></small>
                <small>Дети: <?php echo e($el->amountC); ?></small>
                <h3>Город прибытия: <?php echo e($el->backyard); ?></h3>
                <h3>Улица: <?php echo e($el->streetOld); ?></h3>
                <h3>Дом: <?php echo e($el->homeOld); ?></h3>
                <a href="<?php echo e(route('contactUp', $el->id)); ?>">Принять заказ</a>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/homeDriver.blade.php ENDPATH**/ ?>