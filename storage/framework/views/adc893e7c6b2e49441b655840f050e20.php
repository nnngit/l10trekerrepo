<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tour BOOKS MASTER</title>
    <link href="<?php echo e(asset('web/css/app.css')); ?>" rel="stylesheet">
	
	<link href="web/css/bootstrap.css" rel="stylesheet">
    <link href="web/css/style.css" rel="stylesheet">

</head>
<body>

<div class="container">

<div class="text-center" style="margin: 50px 0 50px 0;BACKGROUND:ALICEBLUE">
	<CENTER><a href=/ ><img src=<?php echo e(asset("web/images/logo.svg")); ?> alt="Logo"></img></a>
	<a href=/ >Tour BookS MASTER</a></CENTER>
</div>
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php /**PATH D:\L10TREKKER\resources\views/books/layout.blade.php ENDPATH**/ ?>