<?php $__env->startSection('content'); ?>

<STYLE>
table, th, td {
  border: 1px solid black;
  padding;25px;
}
</STYLE>

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Books</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('books.create')); ?>">Add Booking</a>
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
			<th>duration</th>           
			<th>bookingdate</th>           
			<th>Travel Date</th>           
			<th>totalcost</th>           
			<th>paymentstatus</th>           
			<th>travelerNameage</th>           
			<th>phones</th>           
			<th>tourid</th>           
            <th width="280px">Actions</th>
        </tr>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->id); ?></td>
                <td><?php echo e($book->name); ?></td>
                <td><?php echo e($book->detail); ?></td>
				<td><?php echo e($book->duration); ?></td>
				<td><?php echo e($book->bookingdate); ?></td>
				<td><?php echo e($book->traveldate); ?></td>
				<td><?php echo e($book->totalcost); ?></td>
				<td><?php echo e($book->paymentstatus); ?></td>
				<td><?php echo e($book->travelernameage); ?></td>
				<td><?php echo e($book->phones); ?></td>
					
					<?php
					//$v  =	$book->tourid;
					//$tourname = DB::table('tours')->where('id',$v)->get('name');							
				    //echo "'".$tourname."'";	
					
					//$jsonobj ="'".$tourname."'";
					//echo $jsonobj;
					//exit;

//$obj = json_decode($jsonobj);
//echo $obj;
//echo $obj->name;
//exit;
					

					
					
				    ?>
				
				<td><?php echo e($book->tourid); ?></td>
					
					
													

				
                <td>
                    <form action="<?php echo e(route('books.destroy',$book->id)); ?>" method="POST">

                        <a class="btn btn-info" href="<?php echo e(route('books.show',$book->id)); ?>">Show</a>

                        <a class="btn btn-primary" href="<?php echo e(route('books.edit',$book->id)); ?>">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Destination?');"> Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
	     <?php echo $books->links('pagination::bootstrap-5'); ?>  
</body>	
	

<?php $__env->stopSection(); ?>





<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/books/index.blade.php ENDPATH**/ ?>