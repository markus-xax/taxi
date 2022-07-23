<form method="POST">
    <?php echo csrf_field(); ?>
    <p>
    <div class="mb-3">
        <label class="form-label">Номер телефона:</label>
        <input type="text" name="number" class="form-control" id="number"/>
    </div>
    </p>

    <p>
    <div class="mb-3">
        <label class="form-label">Имя:</label>
        <input type="text" class="form-control" name="name"/>
    </div>
    </p>
    <p>
    <div class="mb-3">
        <label class="form-label">Пароль:</label>
        <input type="text" class="form-control" name="password"/>
    </div>
    </p>
    <p>
        <button type="submit" class="btn btn-secondary">Зарегестрироваться</button>
    </p>
</form>
<?php /**PATH C:\OpenServer\domains\taxi\resources\views/forms/LKform.blade.php ENDPATH**/ ?>