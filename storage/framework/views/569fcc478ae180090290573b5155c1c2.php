<section>
    <header>
        <h2 class="text-lg font-medium text-primary">
            <?php echo e(__('Update Password')); ?>

        </h2>
        <p class="mt-1 text-sm text-secondary">
            <?php echo e(__('Ensure your account is using a long, random password to stay secure.')); ?>

        </p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>" class="mt-6 space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div>
            <label for="current_password" class="block text-sm font-medium text-primary">
                <?php echo e(__('Current Password')); ?>

            </label>
            <input id="current_password" name="current_password" type="password" class="input input-bordered w-full mt-2" autocomplete="current-password" required />
            <?php $__errorArgs = ['current_password'];
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

        <div>
            <label for="password" class="block text-sm font-medium text-primary">
                <?php echo e(__('New Password')); ?>

            </label>
            <input id="password" name="password" type="password" class="input input-bordered w-full mt-2" autocomplete="new-password" required />
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

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-primary">
                <?php echo e(__('Confirm Password')); ?>

            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="input input-bordered w-full mt-2" autocomplete="new-password" required />
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

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>

            <?php if(session('status') === 'password-updated'): ?>
                <div class="alert alert-success shadow-lg p-2 text-sm">
                    <span><?php echo e(__('Saved.')); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\profile\partials\update-password-form.blade.php ENDPATH**/ ?>