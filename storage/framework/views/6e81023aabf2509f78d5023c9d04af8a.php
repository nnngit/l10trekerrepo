<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add Destination</h3>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
<body style=background:#1DC5CE>
    <form action="<?php echo e(route('destinations.store')); ?>" method="POST" STYLE="MARGINF:25PX;PADDING:25PX;">
        <?php echo csrf_field(); ?>

        <div class="row" style="margin;25px;PADDING:25PX;background:aliceblue;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
			<p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail"></textarea>
                </div>
            </div>
			<p></p><p></p>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Add Destination</button>
            </div>
        </div>

    </form>
</BODY>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('destinations.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/destinations/create.blade.php ENDPATH**/ ?>