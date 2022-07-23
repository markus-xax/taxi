<div  class="container">
<form method="POST">
    <?php echo csrf_field(); ?>
    <p>
    <div class="mb-3">
        <label class="form-label">Город подачи</label>
        <select name="backyard" id="backyard">
            <option value="lugansk">Луганск</option>
            <option value="lutugino">Лутгино</option>
            <option value="krasnodon">Краснодон</option>
            <option value="krasniyluch">Красный луч</option>
        </select>
    </div>
    </p>
    <p>
    <div class="mb-3">
        <label class="form-label">Место подачи:</label>
        <input type="text" placeholder="улица" class="form-control" name="street"/>
        <input type="number" placeholder="дом" class="form-control" name="home"/>
    </div>
    </p>
    <p>
    <div class="mb-3">
        <label class="form-label">Кол-во человек:</label>
        <input type="number" name="amountH" class="form-control" value="количество пассажиров"/>
    </div>
    </p>
    <p>
    <div class="mb-3">
        <label class="form-label">Дети:</label>
        <input type="number" name="amountC" class="form-control" value="кол во детей"/>
    </div>
    <p>
        (Если детей нет напиишите 0)
    </p>
    <p>
        Тoчка прибытия(адрес)
    <p>
    <div class="mb-3">
        <label class="form-label">Город:</label>
        <select name="backyardOld" id="backyardOld">
            <option value="lugansk">Луганск</option>
            <option value="lutugino">Лутгино</option>
            <option value="krasnodon">Краснодон</option>
            <option value="krasniyluch">Красный луч</option>
        </select>
    </div>
    </p>
    <div class="mb-3">
        <input type="text" placeholder="улица" class="form-control" name="streetOld"/>
        <input type="number" placeholder="дом" class="form-control" name="homeOld"/>
    </div>
    </p>
    <div class="mb-3">
    <input type="submit" name="submit" value="Заказать" class="btn btn-secondary btn-lg"/>
    </div>
</form>
</div>

<?php /**PATH C:\OpenServer\domains\taxi\resources\views/forms/orderYes.blade.php ENDPATH**/ ?>