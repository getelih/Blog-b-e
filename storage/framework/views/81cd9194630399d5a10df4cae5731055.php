<?php $__env->startSection('content'); ?>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card bg-base-100 dark:bg-gray-800 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-primary"><?php echo e(__('Dashboard')); ?></h2>
                <div class="alert alert-success shadow-lg p-4 text-lg">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\dashboard.blade.php ENDPATH**/ ?>