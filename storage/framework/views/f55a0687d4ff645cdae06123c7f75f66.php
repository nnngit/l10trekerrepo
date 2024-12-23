<?php $__env->startSection('content'); ?>
<BODY STYLE=background:#1DC5CE>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Show Destination</h3>
            </div>
        </div>
    </div>

    <div class="row" style="margin;25px;PADDING:25PX;background:DARKORANGE;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <?php echo e($book->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <?php echo e($book->detail); ?>

            </div>
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <?php echo e($book->duration); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Booking Date:</strong>
                    <?php echo e($book->bookingdate); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travel Date:</strong>
                    <?php echo e($book->traveldate); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Cost:</strong>
                    <?php echo e($book->totalcost); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Payment Status:</strong>
                    <?php echo e($book->paymentstatus); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>TravelerName-age:</strong>
                    <?php echo e($book->travelernameage); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phones:</strong>
                    <?php echo e($book->phones); ?>

                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tourid & Name:</strong>
                    <?php echo e($book->tourid); ?>

                </div>
            </div>
			
			
			<p></p>
		
		
		
    </div>
</bODY>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/books/show.blade.php ENDPATH**/ ?>