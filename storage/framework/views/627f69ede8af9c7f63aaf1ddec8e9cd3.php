<?php $__env->startSection('title', 'Tags'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('tags.create')); ?>" class="btn btn-primary">New Tag</a>
    <div class="my-4 text-center">
        <?php echo e($tags->links()); ?>

    </div>
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover">
                    <td><?php echo e($tag->id); ?></td>
                    <td><?php echo e($tag->name); ?></td>
                    <td><?php echo e($tag->created_at); ?></td>
                    <td><?php echo e($tag->updated_at); ?></td>
                    <td>
                        <div class="join">
                            <a href="<?php echo e(route('tags.edit', ['tag' => $tag])); ?>" class="join-item btn btn-warning">Edit</a>
                            <button form="delete-tag-<?php echo e($tag->id); ?>" class="join-item btn btn-error">Delete</button>
                        </div>
                        <form id="delete-tag-<?php echo e($tag->id); ?>" action="<?php echo e(route('tags.destroy', ['tag' => $tag])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
    <div class="my-4 text-center">
        <?php echo e($tags->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\tags\index.blade.php ENDPATH**/ ?>