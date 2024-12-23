<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Booking</h3>
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
    <form action="<?php echo e(route('books.update',$book->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row" style="margin;25px;PADDING:25PX;background:aliceblue;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="<?php echo e($book->name); ?>" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail"><?php echo e($book->detail); ?></textarea>
                </div>
            </div>
			
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>duration:</strong>
                    <input type="text" name="duration" value="<?php echo e($book->duration); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bookingdate:</strong>
                    <input type="text" name="bookingdate" value="<?php echo e($book->bookingdate); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>traveldate:</strong>
                    <input type="text" name="traveldate" value="<?php echo e($book->traveldate); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>totalcost:</strong>
                    <input type="text" name="totalcost" value="<?php echo e($book->totalcost); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>paymentstatus:</strong>
                    <input type="text" name="paymentstatus" value="<?php echo e($book->paymentstatus); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>travelernameage:</strong>
                    <input type="text" name="travelernameage" value="<?php echo e($book->travelernameage); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phones:</strong>
                    <input type="text" name="phones" value="<?php echo e($book->phones); ?>" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tourid:</strong>
                    <input type="text" name="tourid" value="<?php echo e($book->tourid); ?>" class="form-control">
                </div>
            </div>
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>
</BODY>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/books/edit.blade.php ENDPATH**/ ?>