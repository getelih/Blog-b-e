<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card bg-base-200 shadow-xl">
        <div class="card-body">
            <h1 class="card-title"><?php echo e($user->name); ?></h1>
            <table class="table table-zebra">
                <tbody>
                    <tr class="hover">
                        <th>Comments Count</th>
                        <td><?php echo e($user->comments()->count()); ?></td>
                    </tr>
                    <tr class="hover">
                        <th>Like Count</th>
                        <td><?php echo e($user->likes()->count()); ?></td>
                    </tr>
                    <tr class="hover">
                        <th>Posts Count</th>
                        <td><?php echo e($user->posts()->count()); ?></td>
                    </tr>
                    <tr class="hover">
                        <th>Comments on users Posts Count</th>
                        <td><?php echo e($user->postComments()->count()); ?></td>
                    </tr>
                    <tr class="hover">
                        <th>Likes on users Posts Count</th>
                        <td><?php echo e($user->postLikes()->count()); ?></td>
                    </tr>
                    <tr class="hover">
                        <th>Followers count</th>
                        <td><?php echo e($user->followers()->count()); ?></td>
                    </tr>
                    <tr class="hover">
                        <th>Followees count</th>
                        <td><?php echo e($user->followees()->count()); ?></td>
                    </tr>
                <tbody>
            </table>
            <form action="<?php echo e(route('follow', ['user' => $user])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if($user->authHasFollowed): ?>
                    <button class="btn btn-error">Unfollow</button>
                <?php else: ?>
                    <button class="btn btn-primary">Follow</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <div class="my-4 text-center">
        <?php echo e($posts->links()); ?>

    </div>
    <div class="grid grid-cols-4 gap-2">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.post-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\user.blade.php ENDPATH**/ ?>