<?php $__env->startSection('title'); ?>Личный кабинет<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <p class="text-center">
        <b>Внимание!</b>
        Аккаунт будет действителен до 00, далее - удаляется!
        Это сделано в целях безопасности
        <b>Не выходите из проложения, ваша учетная записть удалится!</b>
    </p>
    <p class="text-center">
        <a href="/home/driver/LK/reg">Регистрация</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\taxi\resources\views/LK.blade.php ENDPATH**/ ?>