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

</div>
<br>
<form action="<?php echo e(route('benice')); ?>" method="post">
    <label for="select">I want to...</label>
    <select id="select" name="action">
        <option value="greet">Greet</option>
        <option value="hug">Hug</option>
        <option value="kiss">Kiss</option>
    </select>
    <input type="text" name="name">
    <button type="submit">Do a nice action!</button>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>