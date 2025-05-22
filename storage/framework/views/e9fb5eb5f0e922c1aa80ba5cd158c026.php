<div class="navbar bg-base-100 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <!-- Logo -->
    <div>
        <a href="<?php echo e(route('home')); ?>" class="text-xl btn btn-ghost"><?php echo e(config('app.name')); ?></a>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1">
        <ul class="menu menu-horizontal px-1">
            <li><a href="<?php echo e(route('page1')); ?>">Page 1</a></li>
            <li><a href="<?php echo e(route('page2')); ?>">Page 2</a></li>

            <?php if(auth()->guard()->check()): ?>
                <li>
                    <details>
                        <summary>Admin</summary>
                        <ul class="p-2 rounded bg-base-100 dark:bg-gray-700">
                            <li><a href="<?php echo e(route('posts.index')); ?>">Posts</a></li>
                            <li><a href="#">Link 2</a></li>
                        </ul>
                    </details>
                </li>
            <?php endif; ?>
        </ul>
    </div>

    <!-- Authentication -->
    <div>
        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Register</a>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary">Login</a>
        <?php else: ?>
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary><?php echo e(auth()->user()->name); ?></summary>
                        <ul class="p-2 rounded bg-base-100 dark:bg-gray-700">
                            <li><a href="<?php echo e(route('profile.edit')); ?>">Profile</a></li>
                            <li><button form="logout">Logout</button></li>
                        </ul>
                    </details>
                </li>
            </ul>
            <form id="logout" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            </form>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\layouts\navigation.blade.php ENDPATH**/ ?>