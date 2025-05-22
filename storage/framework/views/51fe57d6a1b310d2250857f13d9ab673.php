<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.post-card', ['full' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1 class="text-2xl">Comments:</h1>
    <div class="mt-2 shadow-xl card bg-base-100">
        <div class="card-body">
            <form action="<?php echo e(route('comment', ['post' => $post])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Comment</span>
                    </div>
                    <textarea name="body" rows="8" class="textarea textarea-bordered <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> textarea-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Write something cool..."><?php echo e(old('body')); ?></textarea>
                    <div class="label">
                        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="label-text-alt text-error"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </label>
                <button class="btn btn-primary">Comment</button>
            </form>
        </div>
    </div>
    <?php $__currentLoopData = $post->comments()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-2 shadow-xl card bg-base-100">
            <div class="card-body">
                <p><?php echo e($comment->body); ?></p>
                <p class="text-neutral-content"><?php echo e($comment->created_at->diffForHumans()); ?></p>
                <p class="text-info-content">
                    <?php echo e($comment->user->name); ?>

                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\post.blade.php ENDPATH**/ ?>