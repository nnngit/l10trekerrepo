<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>L8 Q Management</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<header><b><center>QUESTIONS MANAGEMENT SYSTEM</center></b></header>
<div class="container">

    <div class="text-center" style="margin: 50px 0 50px 0;"><a href="<?php echo e(url("products")); ?>"><img
                src="<?php echo e(asset("qlogo.png")); ?>" alt="Logo"></a><br>L8 CRUD QUESTIONS
                <?php echo $__env->yieldContent('content'); ?>
    </div>
    
</div>
<footer><b><center>QUESTIONS MANAGEMENT SYSTEM </center> </b></footer>
</body>
</html>
  <?php /**PATH D:\L10QA\resources\views/qa/layout.blade.php ENDPATH**/ ?>