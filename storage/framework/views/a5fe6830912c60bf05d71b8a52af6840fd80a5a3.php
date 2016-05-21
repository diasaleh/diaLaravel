<?php $__env->startSection('content'); ?>
    <div>
        <h1>I hug you!</h1>
        <a href="<?php echo e(route('home')); ?>"></a>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>