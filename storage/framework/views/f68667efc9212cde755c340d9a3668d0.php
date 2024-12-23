<?php $__env->startSection('content'); ?>

<body style=background:crimson >
    <div class="row" style="margin-bottom: 20px;">
        <h3>Questions&nbsp; <a class="btn btn-success" href="<?php echo e(route('qa.create')); ?>">Add Question</a></h3>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered" bgcolor="yellow" style="border:5px solid DarkOrange;
  border-radius: 23px;" >
        <tr>
            <th>ID</th>
            <th>QUESTION</th>
            <th width="280px">Actions</th>
        </tr>
        <?php $__currentLoopData = $adminques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($aq->id); ?></td>
                <td><?php echo e($aq->question); ?></td>
                <td>
                    <form action="<?php echo e(route('qa.destroy',$aq->id)); ?>" method="POST">

                        <a class="btn btn-info" href="<?php echo e(route('qa.show',$aq->id)); ?>">Show</a>

                        <a class="btn btn-primary" href="<?php echo e(route('qa.edit',$aq->id)); ?>">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
     <?php echo $adminques->links('pagination::bootstrap-4'); ?> 
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('qa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10QA\resources\views/qa/index.blade.php ENDPATH**/ ?>