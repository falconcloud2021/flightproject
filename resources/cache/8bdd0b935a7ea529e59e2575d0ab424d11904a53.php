<?php $__env->startSection('content'); ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Базовые таблицы </h3>
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
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1"> Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" 
                        placeholder="Введите Наименование товара">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3"> Price</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Введите Цену товара">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4"> Number</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Введите Артикул товара">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender"> Categories</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Ноутбуки</option>
                          <option>Телевизоры</option>
                          <option>Мобильные телефоны</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label> Images</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Загрузить</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1"> Location</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Введите название города">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Подробное описание товара"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Сохранить</button>
                      <button class="btn btn-light">Отменить</button>
                    </form>
                  </div>
                </div>
              </div>


            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- <?php echo $__env->make('user.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
        <!-- partial -->
    </div>

    
        
            
        
        
            
                
                    
                    
                        
                            
                            
                            
                            
                        
                    
                    
                
            
        
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv6\app\Views/user/product_edit.blade.php ENDPATH**/ ?>