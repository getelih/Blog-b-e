<?php $__env->startSection('title', 'Edit Tag'); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-2/3 mx-auto card bg-base-300">
        <div class="card-body">
            <h2 class="card-title">Edit Tag</h2>
            <?php echo $__env->make('tags.form', ['tag' => $tag], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\tags\edit.blade.php ENDPATH**/ ?>