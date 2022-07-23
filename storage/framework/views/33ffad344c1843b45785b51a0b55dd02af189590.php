<form method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
    <label class="form-label">Номер телефона</label>
    <input type="text" name="number" class="form-control" id="number" aria-describedby="number">
    </div>

    <div class="mb-3">
        <label class="form-label">Имя</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
    </div>

    <div class="mb-3">
        <label class="form-label">Пароль</label>
        <input type="password" name="password" class="form-control" id="password" aria-describedby="password">
    </div>

    <p>
        <button type="submit" class="btn btn-dark">Отправить</button>
    </p>

</form>
<?php /**PATH C:\OpenServer\domains\taxi\resources\views/forms/LKform.blade.php ENDPATH**/ ?>