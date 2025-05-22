<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(url()->previous()); ?>" class="my-2 btn btn-primary">Back</a>
    <table class="table table-zebra">
        <tbody>
            <tr class="hover">
                <th>ID</th>
                <td><?php echo e($post->id); ?></td>
            </tr>
            <tr class="hover">
                <th>Title</th>
                <td><?php echo e($post->title); ?></td>
            </tr>
            <tr class="hover">
                <th>Content</th>
                <td><?php echo e($post->body); ?></td>
            </tr>
            <tr class="hover">
                <th>User</th>
                <td><?php echo e($post->user->name); ?></td>
            </tr>
            <tr class="hover">
                <th>Created</th>
                <td><?php echo e($post->created_at); ?></td>
            </tr>
            <tr class="hover">
                <th>Updated</th>
                <td><?php echo e($post->updated_at); ?></td>
            </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\posts\show.blade.php ENDPATH**/ ?>