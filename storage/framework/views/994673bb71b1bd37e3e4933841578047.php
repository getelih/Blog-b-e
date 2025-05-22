<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-base-200">
    <div class="card w-full sm:max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-primary"><?php echo e(__('Confirm Password')); ?></h2>
            <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                <?php echo e(__('This is a secure area of the application. Please confirm your password before continuing.')); ?>

            </p>

            <form method="POST" action="<?php echo e(route('password.confirm')); ?>">
                <?php echo csrf_field(); ?>

                <!-- Password -->
                <div class="form-control">
                    <label for="password" class="label">
                        <span class="label-text"><?php echo e(__('Password')); ?></span>
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="input input-bordered w-full">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Confirm Button -->
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        <?php echo e(__('Confirm')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\auth\confirm-password.blade.php ENDPATH**/ ?>