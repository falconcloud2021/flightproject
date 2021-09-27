<?php $__env->startSection('content'); ?>

	<div class="main-panel">
    <div class="content-wrapper">
      <div class="col-12">
        <div class="card-dark">
          <div class="card-body">
            <h4 class="card-title"> Добрый день <?php echo e($user->first_name); ?> !</h4>
            <form class="form-sample">
            <p class="card-description"> Персональная информация о пользователе </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ваши Имя</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="first_name" value="<?php echo e($user->first_name); ?>"/> 
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Фамилия</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="second_name" value="<?php echo e($user->second_name); ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Отчество</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="second_name" value="<?php echo e($user->last_name); ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Роль</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="g_name" value="<?php echo e($user->g_name); ?>"/>
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Аватар</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="ava" />
                      </div>
                    </div>
                  </div>
                    <div class="nav-profile-image">
                      <img src="/resources/media/images/<?php echo e($user->ava); ?>" name="ava" alt="ava">
                       
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Дата регистрации</label>
                        <div class="col-sm-9">
                          <input class="form-control" name="created_at" value="<?php echo e($user->created_at); ?>" placeholder="dd/mm/yyyy" />
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="row">
                    </div>

                    <p class="card-description"> Адрес </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Адрес 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                          <button class="btn btn-block btn-lg btn-gradient-success mt-4"> Сохранить</button>
                          <a href="/admin/dashboard">Вернуться на главную!</a>
                        </div>
                      </div>
                    </div>  
                  </form>
                </div>
              </div>
            </div>      
          </div>                  
        </div>
              
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv10\app\Views/admin/profile.blade.php ENDPATH**/ ?>