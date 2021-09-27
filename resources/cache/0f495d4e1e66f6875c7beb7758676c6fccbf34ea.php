<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-lg-3 col-sm-3 col-xs-12" style="height: 100px; line-height: 100px;">
    <img  src="ссылка на фото" style="width: 80px; height: 80px;  " />
    </div>
    <div  class="col-lg-3 col-sm-3 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
     Название
    </div>
    <div class="col-lg-2 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
    Цена
    </div>
    <div class="col-lg-1 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
    Количество
    </div>
    <div class="col-lg-3 col-sm-2 col-xs-12 mob-fix" style="height: 100px; line-height: 100px;">
    Удалить
    </div>
</div>
<hr>
<div style="width: 100%; text-align: right;">
    <div style="width: 50%; float: right;">
    <button>Пересчитать</button>
    <button>Оформить заказ</button>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv10\app\Views/user/basket.blade.php ENDPATH**/ ?>