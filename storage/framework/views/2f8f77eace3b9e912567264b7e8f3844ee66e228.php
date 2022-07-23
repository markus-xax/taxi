<?php $__env->startSection('title'); ?>Главная<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <p class="text-center"><b>Добро пожаловать на наш сайт</b>, для начала выберете ваше направление.</p>
        <div class="text-center">
            <a class="btn btn-outline-secondary" href="/form/orderYes" role="button">Я пассажир</a>
            <a class="btn btn-outline-secondary" href="/home/driver/LK" role="button">Я водитель</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/home.blade.php ENDPATH**/ ?>