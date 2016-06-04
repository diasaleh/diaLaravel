<?php $__env->startSection('content'); ?>
<div>
    <h1>hello!</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor error incidunt minus officia quis quisquam veritatis. Culpa dolores, ex facere hic iste laborum magnam nesciunt porro quisquam quo, repellat ut.
    </p>
    <div class="acti">
        <ul>
            <?php foreach($actions as $action): ?>
                <li><a href="<?php echo e(route('niceaction',['action'=>lcfirst($action->name)])); ?>"><?php echo e($action->name); ?></a></li>
            <?php endforeach; ?>

        </ul>
    </div>

</div>
<br>

<?php if(count($errors) > 0): ?>
    <div class="error">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('add_action')); ?>" method="post">
    <label for="name">name:</label>
    <input type="text" name="name" id="name">
    <label for="niceness">niceness:</label>

    <input type="text" name="niceness" id="niceness">
    <button type="submit">Do a nice action!</button>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

</form>

    <br>
    <br>
    <br>
    <ul>
        <?php foreach($logged_actions as $logged_action): ?>
            <li>
                <?php echo e($logged_action->nice_action->name); ?>

                <?php foreach($logged_action->nice_action->categories as $category): ?>
                    <?php echo e("[" .$category->name ."]"); ?>


                <?php endforeach; ?>
            </li>

        <?php endforeach; ?>
    </ul>

<?php echo e(dd($db)); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>