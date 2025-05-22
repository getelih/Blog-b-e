<?php if($paginator->hasPages()): ?>
    <nav>
        <div class="join">
            
            <?php if($paginator->onFirstPage()): ?>
                <button class="join-item btn btn-disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span aria-hidden="true">«</span>
                </button>
            <?php else: ?>
                <a class="join-item btn" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">«</a>
            <?php endif; ?>

            
            <button class="join-item btn btn-secondary" enabled><?php echo e($paginator->currentPage()); ?></button>

            
            <?php if($paginator->hasMorePages()): ?>
                <a class="join-item btn" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">»</a>
            <?php else: ?>
                <button class="join-item btn btn-disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span aria-hidden="true">»</span>
                </button>
            <?php endif; ?>
        </div>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\partials\simple-pagination.blade.php ENDPATH**/ ?>