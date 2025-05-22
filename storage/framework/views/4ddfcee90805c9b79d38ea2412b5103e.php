<?php if($paginator->hasPages()): ?>
    <nav>
        <div class="join">
            
            <?php if($paginator->onFirstPage()): ?>
                <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span aria-hidden="true">«</span>
                </a>
            <?php else: ?>
                <a class="join-item btn" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">«</a>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <a class="join-item btn btn-disabled" aria-disabled="true"><span><?php echo e($element); ?></span></a>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <a class="join-item btn btn-secondary" aria-current="page"><span><?php echo e($page); ?></span></a>
                        <?php else: ?>
                            <a class="join-item btn" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <a class="join-item btn" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">»</a>
            <?php else: ?>
                <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span aria-hidden="true">»</span>
                </a>
            <?php endif; ?>
        </div>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views/partials/pagination.blade.php ENDPATH**/ ?>