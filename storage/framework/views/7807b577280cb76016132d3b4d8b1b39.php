<style>a {color:white;background:green;border-style:outset;disabled:true;}

body {background-color:cyan;}
</style>

<style>
table, th, td {
  border: 1px solid red;
  border-radius:2px;
}
</style>
<title>LARASOFT </title>


<body onclick=alert("LARASOFT");

<br><br><br><br><br>
<hr>
<h2><?php $title = "HEADER DAILY NEWS"; echo "News~".$title;  ?></h2>
<hr>
<br><br>
<table class="table fpTable lcnp table-hover" cellpadding="4" cellspacing="2" width="100%"  >
    <tr >
	    <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Actions Disabled</strong></td>
    </tr>
<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($new->title); ?></td>
            <td><?php echo e($new->text); ?> </td>
            <td>
                <a href="<?php //echo site_url('news/'.$news_item['slug']); ?>" onClick="alert('VIEW DISABLED')">View</a> | 
                <a href="<?php //echo site_url('news/edit/'.$news_item['id']); ?>" onClick="alert(`EDIT DISABLED`)" >Edit</a> | 
                <a href="<?php //echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br><br>
<hr>
<h2><?php $footer="FOOTER DAILY NEWS"; echo "News~".$footer; ?></h2><hr>


<?php /**PATH D:\l8qa\resources\views/news_view.blade.php ENDPATH**/ ?>