<?php $__env->startSection('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12">
            <div class="card-dark">
                <div class="card-body">
                    <h4 class="card-title"> Форма регистрации нового пользователь сайта!</h4>
                    <form class="form-sample">
                        <p class="card-description"> Введите в поля персональную информацию о пользователе: </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ваши Имя</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="first_name" id="first_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Фамилия</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="surname" id="surname" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Отчество</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="second_name" id="second_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Роль</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="g_name" id="g_name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Аватар</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="ava" id="ava" />
                                    </div>
                                </div>
                            </div>
                            <div class="nav-profile-image">
                                <img src="#" name="ava" alt="ava" class="img-rounded pull-xs-left">

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Дата регистрации</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="created_at" id="created_at" placeholder="dd/mm/yyyy" />
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
                                </div>
                            </div>
                            <div class="row">
                                <div col-xs-4>
                                    <button id="cancel" class="btn btn-gradient-info">Отменить</button>
                                    <button id="submit" class="btn btn-gradient-success">+ Добавить</button>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\flightproject\app\Views/admin/user_add.blade.php ENDPATH**/ ?>