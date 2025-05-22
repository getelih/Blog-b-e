<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-base-200">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-primary"><?php echo e(__('Forgot Password')); ?></h2>
            <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                <?php echo e(__('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')); ?>

            </p>

            <!-- Session Status -->
            <?php if(session('status')): ?>
                <div class="alert alert-success shadow-lg mb-4">
                    <span><?php echo e(session('status')); ?></span>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>

                <!-- Email Address -->
                <div class="form-control">
                    <label for="email" class="label">
                        <span class="label-text"><?php echo e(__('Email')); ?></span>
                    </label>
                    <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus class="input input-bordered w-full">
                    <?php $__errorArgs = ['email'];
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

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        <?php echo e(__('Email Password Reset Link')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\auth\forgot-password.blade.php ENDPATH**/ ?>