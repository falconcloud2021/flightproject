<?php $__env->startSection('content'); ?>
    <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-30 text-thin text-line-height-1">Каталог товаров</h1>
        </header>
        <div class="section background-white">
            <div class="line">
                <div class="margin text-center">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="s-12 m-12 l-4 margin-bottom">
                        <div class="padding-2x block-bordered border-radius">
                            <img class="margin-bottom-30" src="/resources/media/images/<?php echo e($product->img); ?>" alt="<?php echo e($product->title); ?>">
                            <h2 class="text-thin"><?php echo e($product->title); ?></h2>
                            <p class="margin-bottom-30"><?php echo e(mb_strimwidth($product->description, 0, 150, '...')); ?></p>
                        
                            <a class="button border-radius background-primary text-size-10 text-white text-strong" href="/product/<?php echo e($basket->id); ?>">Купить</a>
                            <a class="button border-radius background-black text-size-12 text-white text-strong" href="/product/<?php echo e($product->id); ?>">Подробнее</a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </article>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\yaroslav.loc\app\Views/product_list.blade.php ENDPATH**/ ?>