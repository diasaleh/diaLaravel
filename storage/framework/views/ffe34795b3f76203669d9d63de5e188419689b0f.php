<?php $__env->startSection('content'); ?>
    <div>
        <?php if($name == null): ?>
            <h1>I greet Dia!</h1>

        <?php else: ?>
            <h1>I greet <?php echo e($name); ?>!</h1>
        <?php endif; ?>
        <a href="<?php echo e(route('home')); ?>">home</a>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>