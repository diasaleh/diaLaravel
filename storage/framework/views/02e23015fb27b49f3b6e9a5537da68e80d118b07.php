<?php $__env->startSection('content'); ?>
    <div>
        <h1>I <?php echo e($action); ?> <?php echo e($name); ?>!</h1>
        <a href="<?php echo e(route('home')); ?>">Back</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>