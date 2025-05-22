<form action="<?php echo e(isset($tag) ? route('tags.update', $tag) : route('tags.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if(isset($tag)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <label class="w-full form-control">
        <div class="label">
            <span class="label-text">Tag Name</span>
        </div>
        <input name="name" type="text" placeholder="Tag name" value="<?php echo e(old('name', $tag->name ?? '')); ?>"
               class="w-full input input-bordered <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="label-text-alt text-error"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </label>

    <input type="submit" class="btn btn-primary mt-4" value="<?php echo e(isset($tag) ? 'Update' : 'Create'); ?>">
</form>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\tags\form.blade.php ENDPATH**/ ?>