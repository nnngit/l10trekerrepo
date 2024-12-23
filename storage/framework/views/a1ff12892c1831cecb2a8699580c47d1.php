<?php $__env->startSection('content'); ?>

<STYLE>
table, th, td {
  border: 1px solid black;
}
</STYLE>



    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Tours</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('tours.create')); ?>">Add Tour pkgs</a>
            </div>
        </div>
    </div>



    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>


<body style=background:#1DC5CE>
    <table style="width:100%;border: 1px solid black;background:ALICEBLUE" >
        <tr>
            <th>ID</th>
            <th>Name</th>           
            <th>Details</th>
			<th>price</th>
			<th>duration</th>
			<th>destinationid</th>
            <th width="280px">Actions</th>
        </tr>
        <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($tour->id); ?></td>
                <td><?php echo e($tour->name); ?></td>
                <td><?php echo e($tour->detail); ?></td>
				<td><?php echo e($tour->price); ?></td>
				<td><?php echo e($tour->duration); ?></td>
				<td><?php echo e($tour->destinationid); ?></td>
								
                <td>
                    <form action="<?php echo e(route('tours.destroy',$tour->id)); ?>" method="POST">

                        <a class="btn btn-info" href="<?php echo e(route('tours.show',$tour->id)); ?>">Show</a>

                        <a class="btn btn-primary" href="<?php echo e(route('tours.edit',$tour->id)); ?>">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Tour?');"> Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $tours->links('pagination::bootstrap-5'); ?> 
</body>	
	

<?php $__env->stopSection(); ?>





<?php echo $__env->make('tours.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/tours/index.blade.php ENDPATH**/ ?>