<?php $__env->startSection('content'); ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Карточка SKU </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Таблицы</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Базовые таблицы</li>
                    </ol>
                </nav>
            </div>
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Группа товара № <?php echo e($product->category_id); ?> </h4>
                    <p class="card-description"> Информация о товаре <?php echo e($product->img); ?> </p>
                    <form class="forms-sample" method="post" action="/admin/product/edit/<?php echo e($product->id); ?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="InputName"> Наименование</label> 
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo e($product->title); ?>"> 
                      </div>
                      <div class="form-group">
                        <label for="InputPrice"> Цена</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo e($product->price); ?>">
                      </div>
                      <div class="form-group">
                        <label for="description"> Описание</label>
                          <div id="description"> <?php echo e($product->description); ?> </div>
                      </div>
                      <div class="form-group">
                        <label for="category_id"> Категория</label>
                          <select class="form-control" name="category_id" id="category_id">
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($category->id); ?>"
                                  <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>

                                  >
                                      <?php echo e($category->title); ?>

                                  </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="img">Загрузка файла</label>
                        <input id="img" type="file" name="img" value="<?php echo e($product->img); ?>">
                        
                          
                          
                            
                          
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> Дата создания</label> 
                        <input type="text" class="form-control" id="created_at" name="created_at" placeholder="Created" value="<?php echo e($product->created_at); ?>"> 
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
                        <input type="text" class="form-control" id="id" name="id" placeholder="Здесь указан ID" value="<?php echo e($product->id); ?>" disabled>
                      </div>
                      <button type="submit" class="btn btn-gradient-success mr-2">Сохранить</button>
                      <a class="btn btn-info" href="/admin/products">Отменить</a>
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv10\app\Views/admin/product_edit.blade.php ENDPATH**/ ?>