<?php $__env->startSection('title', 'Posts'); ?>
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">New Post</a>
    <div class="my-4 text-center">
        <?php echo e($posts->links()); ?>

    </div>
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover">
                    <td><?php echo e($post->id); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->created_at); ?></td>
                    <td><?php echo e($post->updated_at); ?></td>
                    <td>
                        <div class="join">
                            <a href="<?php echo e(route('posts.show', ['post' => $post])); ?>" class="join-item btn btn-info">View</a>
                            <a href="<?php echo e(route('posts.edit', ['post' => $post])); ?>" class="join-item btn btn-warning">Edit</a>
                            <button form="delete-post-<?php echo e($post->id); ?>" class="join-item btn btn-error">Delete</button>
                        </div>
                        <form id="delete-post-<?php echo e($post->id); ?>" action="<?php echo e(route('posts.destroy', ['post' => $post])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
    <div class="my-4 text-center">
        <?php echo e($posts->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\posts\index.blade.php ENDPATH**/ ?>