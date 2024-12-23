

<?php $__env->startSection('content'); ?>

<STYLE>
table, th, td {
  border: 1px solid black;
  padding;25px;
}
</STYLE>


<body onclick=alert("MAGIZH"); style=background:aliceblue >
<div class="container">
<h6>DESTINATIONS LIST</h6>
<table style="width:100%;border: 1px solid black;background:darkorange" > 
    <tr >
	    <td><strong>ID</strong></td>
        <td><strong>NAME</strong></td>
		<td><strong>DESTINATION IMAGE</strong></td>
		</tr>
<?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($list->id); ?></td>
            <td><?php echo e($list->name); ?> </td>
           	<td><IMG SRC='WEB/IMAGES/TREKKING.JPG' WIDTH=77PX HEIGHT=77PX>placeholder lorem ipsum</IMG></td>		
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('DESTINATIONS.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\L10TREKKER\resources\views/destinations/list.blade.php ENDPATH**/ ?>