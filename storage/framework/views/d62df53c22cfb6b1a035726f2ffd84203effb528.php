<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">На главную</a></li>
            <?php echo $__env->yieldContent('nav'); ?>
            <li class="nav-item"><a href="/sum" class="nav-link">Стоимость</a></li>
        </ul>
    </header>
</div>
<?php if(session()->has('success')): ?>
    <div class="container">
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

    </div>
    </div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <div class="container">
    <div class="alert alert-danger">
        <?php echo e(session()->get('error')); ?>

    </div>
    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
        <div class="container">
            <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php echo $__env->yieldContent('body'); ?>
</body>

</html>
<?php /**PATH C:\OpenServer\domains\taxi\resources\views/layout.blade.php ENDPATH**/ ?>