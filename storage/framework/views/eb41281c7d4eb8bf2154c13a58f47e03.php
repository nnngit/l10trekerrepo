<!-- //timer -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- //tiny mce -->
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>


<?php $__env->startSection('content'); ?>
<body style=background:crimson >
    <div class="row" style="margin-bottom: 1px;">
    <h6 style=background:#FFFFCC>&nbsp;&nbsp;PRACTISE SESSION Questions 1 to 5 &nbsp;  COUNTER TIMING: <span id="timer">Hello</span>&nbsp;&nbsp;</h6>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered" bgcolor="yellow" style="border:5px solid DarkOrange;
  border-radius: 23px;" >
        <tr>
            <th>Q.NO</th>
            <th>ID</th>
            <th>QUESTION</th>
            <th>ANSWER</th>
            <th width="280px">Actions</th>
        </tr>
        <?php $qno=1; ?>
        <?php $__currentLoopData = $testusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><input type=hidden  name=reqsno  value=<?php echo e($qno); ?>  /><?php echo e($qno); ?></td>
                <td><?php echo e($aq->id); ?></td>
                <td><textarea  style=background:crimson rows=2 cols=40><?php echo e($aq->question); ?></textarea></td>
            <form action="<?php echo e(route('test.update',$aq->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <td><input type=hidden  name=s<?php echo e($qno); ?>  value=<?php echo e($qno); ?>  /><textarea  name=ans<?php echo e($qno); ?> id=ata<?php echo e($qno); ?> rows=2 cols=40><?php echo e($aq->answer); ?></textarea></td>
                <td>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">SUBMIT Update</button>
                    </div>
                </div>
            </form>

                    </td>
            </tr>
        <?php $qno++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
<?php $__env->stopSection(); ?>



<!-- timer logic -->
<script>
    function incTimer() {
        var currentMinutes = Math.floor(totalSecs / 60);
        var currentSeconds = totalSecs % 60;
        if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
        if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
        totalSecs++;
        $("#timer").text(currentMinutes + ":" + currentSeconds);
        setTimeout('incTimer()', 1000);
    }

    totalSecs = 0;

    $(document).ready(function() {
            incTimer();
    });
</script>




<script type="text/javascript">
tinymce.init({
    selector: '#ata1'
});
tinymce.init({
    selector: '#ata2'
});
tinymce.init({
    selector: '#ata3'
});
tinymce.init({
    selector: '#ata4'
});
tinymce.init({
    selector: '#ata5'
});


</script>



<script type="text/javascript">
tinymce.init({
    selector: '#myTextarea',
    height: 300,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true
});
</script>

<?php echo $__env->make('test.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10QA\resources\views/test/index.blade.php ENDPATH**/ ?>