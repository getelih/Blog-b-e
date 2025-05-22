<div class="shadow-xl card bg-base-100">
    <?php if($post->images): ?>
        <?php if($post->images->count() === 1): ?>
            <figure>
                <img src="<?php echo e($post->images->first()->url); ?>"/>
            </figure>
        <?php else: ?>
            <div class="w-full carousel">
                <?php $__currentLoopData = $post->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="image_<?php echo e($image->id); ?>" class="relative w-full carousel-item">
                        <img src="<?php echo e($image->url); ?>" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#image_<?php echo e($post->images[$key-1]->id ?? $post->images->last()->id); ?>" class="btn btn-circle">❮</a>
                            <a href="#image_<?php echo e($post->images[$key+1]->id ?? $post->images->first()->id); ?>" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="card-body">
        <h2 class="card-title"><?php echo e($post->title); ?></h2>
        <?php if(isset($full) && $full): ?>
            <p><?php echo $post->displayBody; ?></p>
        <?php else: ?>
            <p><?php echo e($post->snippet); ?></p>
            <p class="text-neutral-content">Comments: <?php echo e($post->comments_count); ?></p>
        <?php endif; ?>
        <?php if($post->category): ?>
            <div class="badge badge-outline badge-primary"><?php echo e($post->category->name); ?></div>
        <?php else: ?>
            <div class="badge badge-outline badge-primary">Uncategorized</div>
        <?php endif; ?>
        <p class="text-neutral-content">Likes: <?php echo e($post->likes_count); ?></p>
        <p class="text-neutral-content"><?php echo e($post->created_at->diffForHumans()); ?></p>
        <p class="text-info-content">
            <a href="<?php echo e(route('user', ['user' => $post->user])); ?>"><?php echo e($post->user->name); ?></a>
        </p>
        <div>
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('tag', ['tag' => $tag])); ?>">
                    <div class="badge badge-outline"><?php echo e($tag->name); ?></div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="justify-end card-actions">
            <form action="<?php echo e(route('like', ['post' => $post])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if($post->authHasLiked): ?>
                    <button class="btn btn-error">Unlike</button>
                <?php else: ?>
                    <button class="btn btn-secondary">Like</button>
                <?php endif; ?>
            </form>
            <?php if(!isset($full) || !$full): ?>
                <a href="<?php echo e(route('post', ['post' => $post])); ?>" class="btn btn-primary">Read more</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Geteli\kms23\Blog-b-e\resources\views\partials\post-card.blade.php ENDPATH**/ ?>