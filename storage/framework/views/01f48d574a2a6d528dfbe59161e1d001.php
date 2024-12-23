<?php $__env->startSection('content'); ?>
<BODY STYLE=background:#1DC5CE>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Show Tour pkgs</h3>
            </div>
        </div>
    </div>

    <div class="row" style="margin;25px;PADDING:25PX;background:DARKORANGE;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <?php echo e($tour->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <?php echo e($tour->detail); ?>

            </div>
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Price:</strong>
                    <?php echo e($tour->price); ?>

                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <?php echo e($tour->duration); ?>

                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Destination Id & Name:</strong>
                    <?php echo e($tour->destination); ?>

                </div>
            </div>

		
		
    </div>
</bODY>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tours.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/tours/show.blade.php ENDPATH**/ ?>