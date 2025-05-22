<section>
    <header>
        <h2 class="text-lg font-medium text-primary">
            <?php echo e(__('Delete Account')); ?>

        </h2>
        <p class="mt-1 text-sm text-secondary">
            <?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.')); ?>

        </p>
    </header>

    <label for="delete-modal" class="btn btn-error"><?php echo e(__('Delete Account')); ?></label>

    <input type="checkbox" id="delete-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <h2 class="text-lg font-medium text-primary">
                <?php echo e(__('Are you sure you want to delete your account?')); ?>

            </h2>
            <p class="mt-1 text-sm text-secondary">
                <?php echo e(__('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')); ?>

            </p>

            <form method="post" action="<?php echo e(route('profile.destroy')); ?>" class="mt-6">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>

                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-primary"><?php echo e(__('Password')); ?></label>
                    <input type="password" name="password" id="password" class="input input-bordered w-full mt-2" placeholder="<?php echo e(__('Password')); ?>" required>
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

                <div class="mt-6 flex justify-end">
                    <label for="delete-modal" class="btn btn-secondary"><?php echo e(__('Cancel')); ?></label>
                    <button type="submit" class="btn btn-error ml-3"><?php echo e(__('Delete Account')); ?></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\profile\partials\delete-user-form.blade.php ENDPATH**/ ?>