<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-theme="nord">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased bg-base-200">
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </body>
</html>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\layouts\guest.blade.php ENDPATH**/ ?>