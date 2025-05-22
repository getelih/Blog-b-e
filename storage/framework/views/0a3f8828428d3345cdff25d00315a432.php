<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-base-200">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-primary"><?php echo e(__('Reset Password')); ?></h2>

            <form method="POST" action="<?php echo e(route('password.store')); ?>">
                <?php echo csrf_field(); ?>

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">

                <!-- Email Address -->
                <div class="form-control">
                    <label for="email" class="label">
                        <span class="label-text"><?php echo e(__('Email')); ?></span>
                    </label>
                    <input id="email" type="email" name="email" value="<?php echo e(old('email', $request->email)); ?>" required autofocus autocomplete="username" class="input input-bordered w-full">
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

                <!-- Password -->
                <div class="form-control mt-4">
                    <label for="password" class="label">
                        <span class="label-text"><?php echo e(__('Password')); ?></span>
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="input input-bordered w-full">
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

                <!-- Confirm Password -->
                <div class="form-control mt-4">
                    <label for="password_confirmation" class="label">
                        <span class="label-text"><?php echo e(__('Confirm Password')); ?></span>
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input input-bordered w-full">
                    <?php $__errorArgs = ['password_confirmation'];
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

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        <?php echo e(__('Reset Password')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\auth\reset-password.blade.php ENDPATH**/ ?>