<?php $__env->startSection('content'); ?><p></p>

      <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Новый товар</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/products">Полный каталог</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Категории</li>
                    </ol>
                </nav>
            </div>
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Группа товара <?php echo e($product->id); ?></h4>
                    <p class="card-description"> Выберите группу товара</p>
                    <form class="forms-sample" method="post" action="#">
                      <div class="form-group">
                        <label for="title"> Наименование</label> 
                        <input type="text" class="form-control" id="title" name="title" placeholder="Введите полное наименование"> 
                      </div>
                      <div class="form-group">
                        <label for="price"> Цена грн.</label> 
                        <input type="text" class="form-control" id="price" name="price" placeholder="Введите цену товара"> 
                      </div>
                      <div class="form-group">
                        <label for="description"> Описание</label>
                          <div id="description"> </div>
                      </div>
                      <div class="form-group">
                        <label for="category_id"> Категория</label> 
                        <input type="text" class="form-control" id="category_id" name="category_id" placeholder="Category"> 
                      </div>
                      <div class="form-group">
                        <label>Загрузка файла</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-danger" type="button">Загрузить</button>
                          </span>
                        </div>
                        <div id="img">  </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender"> Критерий</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option> Новинка</option>
                          <option> Акция</option>
                          <option> НД</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ID"> ID</label>
                        <input type="id" class="form-control" id="exampleInputPassword4" placeholder="Здесь указан ID">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> Дата создания</label> 
                        <input type="text" class="form-control" id="title" name="created_at" placeholder="Created" value="<?php echo e($product->created_at); ?>"> 
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1"> Город</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Расположение">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1"> Описание</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" value="<?php echo e($product->description); ?>"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-success mr-2" href="/admin/products">Сохранить</button>
                      <a class="btn btn-secondary" href="/admin/products">Отменить</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
        <!-- partial -->
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv10\app\Views/admin/product_unit.blade.php ENDPATH**/ ?>