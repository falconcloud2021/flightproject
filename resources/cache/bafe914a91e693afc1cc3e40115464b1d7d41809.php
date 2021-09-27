<?php $__env->startSection('content'); ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Карточка Товара </h3>
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
                    <h4 class="card-title"> Группа товара</h4>
                    <p class="card-description"> Наименование товара </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1"> Наименование</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3"> E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4"> Пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender"> Пол</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option> Мужчина</option>
                          <option> Женщина</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Загрузка файла</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Загрузить</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1"> Город</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Расположение">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1"> Описание</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Принять</button>
                      <button class="btn btn-light">Завершить</button>
                    </form>
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv6\app\Views/admin/product_edit.blade.php ENDPATH**/ ?>