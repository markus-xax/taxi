<div  class="container">
<form method="POST">
    <?php echo csrf_field(); ?>
    <div class="container">
        <p class="text-center">
            <b>Точка подачи</b>
        </p>
    <div class="mb-3">
        <label class="form-label">Город подачи</label>
        <select name="backyard" id="backyard" class="form-select">
            <option value="lugansk">Луганск</option>
            <option value="lutugino">Лутгино</option>
            <option value="krasnodon">Краснодон</option>
            <option value="krasniyluch">Красный луч</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Место подачи</label>
        <input type="text" placeholder="улица" name="street" class="form-control"/>
        <input type="number" placeholder="дом" name="home" class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Кол-во человек</label>
        <input type="number" name="amountH" value="количество пассажиров" class="form-control"/>
    </div>
        <label class="form-label">Дети</label>
        <input type="number" name="amountC" value="кол во детей" class="form-control"/>
        <p><b>(Если детей нет напиишите 0)</b></p>

    <p class="text-center">
        <b>Тoчка прибытия(адрес)</b>
        <div class="mb-3">
            <label class="form-label">Город прибытия</label>
            <select name="backyardOld" id="backyardOld" class="form-select">
                <option value="lugansk">Луганск</option>
                <option value="lutugino">Лутгино</option>
                <option value="krasnodon">Краснодон</option>
                <option value="krasniyluch">Красный луч</option>
            </select>
        </div>
        <label class="form-label">Адрес прибытия</label>
        <div class="mb-3">
        <input type="text" placeholder="улица" name="streetOld" class="form-control"/>
        <input type="number" placeholder="дом" name="homeOld" class="form-control"/>
        </div>
    </p>
        <button type="submit" class="btn btn-dark">Заказать</button>
    </div>
</form>


<?php /**PATH C:\OpenServer\domains\taxi\resources\views/forms/orderYes.blade.php ENDPATH**/ ?>