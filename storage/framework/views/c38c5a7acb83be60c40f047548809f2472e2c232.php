<?php $__env->startSection('title'); ?>Личный кабинет<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="text-center">
    <p>
        <b>Внимание!</b>
        Аккаунт будет действителен до 00, далее - удаляется!
        Это сделано в целях безопасности
        <b>Не выходите из приложения до окончания работы!</b>
    </p>
    <p>
        <a href="/home/driver/LK/reg">Регистрация</a>
    </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/LK.blade.php ENDPATH**/ ?>