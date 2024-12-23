
  
<?php $__env->startSection('content'); ?>
<br>
<div class="container" style=background:#1DC5CE>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=background:aliceblue>
                <div class="card-header"><b><?php echo e(__('Dashboard')); ?><b></div>
<?php if(Auth::user()->name!="admin"): ?>                    
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/bookings ><b>Tour Bookings List<b></a>  
<p></p>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/tours ><b>Tour Packages List<b></a><br>  
<p></p>
<button style="width:100%;background:#DC5CE;" type="submit" class="btn btn-primary" onclick=window.location='<?php echo e(route("destinations")); ?>'>Tour Packages</button>
<p></p>

<?php endif; ?>
<div id=div1 class="card-body" style=display:none; style=background:#1DC5CE > 
<?php if(Auth::check()): ?>
    <?php    $userinfo= Auth::user() ;    ?>
    ID:-&nbsp;<?php echo e($userinfo->id); ?> ,NAME:-&nbsp;<?php echo e($userinfo->name); ?>  ,EMAIL:-&nbsp;<?php echo e($userinfo->email); ?>

    // Authenticated...
<?php else: ?>
    // Not Authenticated...
<?php endif; ?>
</div>

<?php if(Auth::user()->name=="admin"): ?>
<br>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/books ><b>Tour Bookings  MASTER<b></a>
<p></p>

<a style="width:100%;background:darkorange ;" type="submit" class="btn btn-primary" href=/tours ><b>Tour Packages MASTER<b></a>
<p></p> 
<a style="width:100%;background:darkorange ;" type="submit" class="btn btn-primary" href=/destinations ><b>Destinations MASTER<b></a>
<p></p>
<!-only linked lists ->
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/blisty ><b>Tour Bookings List<b></a><br>  
<p></p>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/tlisty ><b>Tour Packages List<b></a>
<p></p>  


<?php endif; ?>    

                <br>
                <div class="card-body" style=background:#1DC5CE>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/dashboard.blade.php ENDPATH**/ ?>