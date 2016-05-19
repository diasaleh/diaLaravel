<?php $__env->startSection('content'); ?>
<div>
    <h1>hello!</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor error incidunt minus officia quis quisquam veritatis. Culpa dolores, ex facere hic iste laborum magnam nesciunt porro quisquam quo, repellat ut.
    </p>
    <div class="acti">
        <ul>
            <li><a href="<?php echo e(Route('greet')); ?>">greet</a></li>
            <li><a href="<?php echo e(Route('hug')); ?>">hug</a></li>
            <li><a href="<?php echo e(Route('kiss')); ?>">kiss</a></li>
        </ul>
    </div>
    <br>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>