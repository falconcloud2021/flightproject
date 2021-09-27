<?php $__env->startSection('content'); ?>

	<div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Регистрация пользователя сайта <? echo ("$users->first_name"); ?></h4>
                    <form class="form-sample">
                      <p class="card-description"> Персональная информация </p>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ваше Имя <? echo ("$users->first_name"); ?></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ваше Отчество <? echo ("$users->second_name"); ?></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ваша Фамилия <? echo ("$users->last_name"); ?></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <ul> <b>Функционал пользователя</b>
                          <i>
                          <li>Просмотр карточек товара по категориям</li>
                          <li>Просмотр статистики</li>
                          <li>Просмотр Акций</li>
                          <li>Просмотр и добавление комментариев</li>
                          <li>Просмотр заказов</li> 
                          </i>
                        </ul>



                        <checkbox>
                          
                        </checkbox>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Примечание</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Менеджер</option>
                                <option>Руководитель</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Дата рождения</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Категории</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Статус</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Активный </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Другой вариант </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> Адресные данные </p>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Адрес 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Регион</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Адрес 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Поштовый Индекс</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Город</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Страна</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
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

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\yaroslav.loc\app\Views/user/profile.blade.php ENDPATH**/ ?>