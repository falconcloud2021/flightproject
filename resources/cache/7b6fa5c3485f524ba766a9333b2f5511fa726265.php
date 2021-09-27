<?php $__env->startSection('content'); ?>
<article>
    <header class="section background-primary text-center">
        <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1"><?php echo e($product->title); ?></h1>
    </header>
    <div class="section background-white">
        <div class="line">
            <h2 class="text-size-30">Описание товара</h2>
            <p><img src="/resources/media/images/<?php echo e($product->img); ?>" alt="<?php echo e($product->title); ?>"></p>
            <p>
                <?php echo e($product->description); ?>

            </p>
            <div class="line">
                <div class="margin">
                    <div class="s-12 m-12 l-6 margin-m-bottom-30">
                        <h2>Цена</h2>
                        <p>
                            <?php echo e($product->price); ?>

                        </p>
                    </div>
                    <div class="s-12 m-12 l-6">
                        <h2>Категория</h2>
                        <p>
                            <?php echo e($product->cat_title); ?>

                        </p>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
                    </div>                   
                </div>                
            </div>
        </div>
    </div>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv9\app\Views/product_item.blade.php ENDPATH**/ ?>