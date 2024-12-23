
  
<?php $__env->startSection('content'); ?>
<br>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><?php echo e(__('Dashboard')); ?><b></div>
<?php if(Auth::user()->name!="admin"): ?>                    
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/test ><b>TAKE TEST 5 QUESTIONS PER SESSION<b></a><br>  
<?php endif; ?>
<br><br>

<button style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" onclick=fn1()>My Profile</button>
<br>
<div id=div1 class="card-body" style=display:none;background:crimson > 
<?php if(Auth::check()): ?>
    <?php    $userinfo= Auth::user() ;    ?>
    ID:-&nbsp;<?php echo e($userinfo->id); ?> ,NAME:-&nbsp;<?php echo e($userinfo->name); ?>  ,EMAIL:-&nbsp;<?php echo e($userinfo->email); ?>

    // Authenticated...
<?php else: ?>
    // Not Authenticated...
<?php endif; ?>
</div>

<br>

<button style="width:100%;background: darkorange;" type="submit" class="btn btn-primary">My Tests</button>
<?php if(Auth::user()->name=="admin"): ?>
<br><br>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/qa ><b>ADMIN QUESTION MASTER<b></a><br>  
<?php endif; ?>    

                <br><br>
                <div class="card-body" style=background:crimson>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="alert alert-success" role="alert" >
                    You Are Logged In As:-&nbsp; <span style=color:red><?php echo e($userinfo->name); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>







<script>
function fn1() {
    alert("My Profile Information");
  var x = document.getElementById("div1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10QA\resources\views/dashboard.blade.php ENDPATH**/ ?>