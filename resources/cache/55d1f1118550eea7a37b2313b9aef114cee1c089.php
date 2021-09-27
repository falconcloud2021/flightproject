<?php $__env->startSection('content'); ?>

      <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> View! Просмотр карточки товара!</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/products">Вернуться в каталог</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Категории</li>
                    </ol>
                </nav>
            </div>
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Группа товара: <?php echo e($product->g_name); ?></h4>
                      <p class="card-description"> <q>Далее детализация по товарной позиции</q></p>
                    <div class="forms-sample">
                      <div class="form-group">
                        <label for="title"> Наименование товара</label> 
                        <div class="form-control" type="text" id="title">
                            <?php echo e($product->title); ?>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="price"> Цена товара</label> 
                        <div class="form-control" type="text" id="price"<?php echo e($product->price); ?>><?php echo e($product->price); ?></div>
                      </div>
                      <div class="form-group">
                        <label for="TextareaDescription"> Подробное описание товара</label>
                        <div class="form-control" ><?php echo e($product->description); ?></div>
                      </div>
                      <div class="form-group">
                        <label>Загруженные файлы</label>
                       <div id="img"> <?php echo e($product->img); ?> </div>
                      </div>
                      <div class="form-group">
                        <label for="title"> Артикул товара</label> 
                        <div class="form-control" type="text" id="artic" name="artic" placeholder="Artic" value="<?php echo e($product->artic); ?>"> </div>
                      </div>
                      <div class="form-group">
                        <label for="title"> Дата создания позиции</label> 
                        <div class="form-control" type="text" id="created_at" name="created_at" placeholder="Created" value="<?php echo e($product->created_at); ?>"> </div>
                      </div>
                      <div class="form-group">
                        <label for="title"> Дата последнего изменения</label> 
                        <div class="form-control" type="text" id="correct" name="correct" placeholder="correct" value="<?php echo e($product->correct); ?>"> </div>
                      </div>
                      <button type="submit" class="btn btn-warning mr-2">Изменить карточку!</button>
                      <a class="btn btn-info" href="/admin/products">Вернуться в каталог</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
        <!-- partial -->
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\yaroslav.loc\app\Views/admin/product_view.blade.php ENDPATH**/ ?>