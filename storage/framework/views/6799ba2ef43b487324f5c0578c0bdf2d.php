<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 8.x CRUD from Scratch</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="text-center" style="margin: 50px 0 50px 0;"><a href="<?php echo e(url("products")); ?>"><img
                src="<?php echo e(asset("logo.png")); ?>" alt="Logo"></a><br>Laravel 8.x  CRUD from Scratch
    </div>

    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php /**PATH D:\L10TREKKER\resources\views/products/layout.blade.php ENDPATH**/ ?>