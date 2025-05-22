<li>
    <a href="<?php echo e(route('category', ['category' => $category])); ?>"><?php echo e($category->name); ?></a>
    <ul>
        <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.subcategory', ['category' => $child], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</li>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\partials\subcategory.blade.php ENDPATH**/ ?>