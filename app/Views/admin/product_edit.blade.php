@extends('layouts.admin')
@section('content')

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
                    <h4 class="card-title"> Группа товара № {{ $product->category_id }} </h4>
                    <p class="card-description"> Информация о товаре {{ $product->img}} </p>
                    <form class="forms-sample" method="post" action="/admin/product/edit/{{ $product->id }}" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="InputName"> Наименование</label> 
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $product->title }}"> 
                      </div>
                      <div class="form-group">
                        <label for="InputPrice"> Цена</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{ $product->price }}">
                      </div>
                      <div class="form-group">
                        <label for="description"> Описание</label>
                          <div id="description"> {{ $product->description }} </div>
                      </div>
                      <div class="form-group">
                        <label for="category_id"> Категория</label>
                          <select class="form-control" name="category_id" id="category_id">
                              @foreach ($categories as $category)
                                  <option value="{{ $category->id }}"
                                  {{ $product->category_id == $category->id ? 'selected' : '' }}
                                  >
                                      {{ $category->title }}
                                  </option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="img">Загрузка файла</label>
                        <input id="img" type="file" name="img" value="{{ $product->img }}">
                        {{--<div class="input-group col-xs-12">--}}
                          {{--<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">--}}
                          {{--<span class="input-group-append">--}}
                            {{--<button class="file-upload-browse btn btn-gradient-danger" type="button">Загрузить</button>--}}
                          {{--</span>                --}}
                        {{--</div>--}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> Дата создания</label> 
                        <input type="text" class="form-control" id="created_at" name="created_at" placeholder="Created" value="{{ $product->created_at }}"> 
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
                        <input type="text" class="form-control" id="id" name="id" placeholder="Здесь указан ID" value="{{ $product->id }}" disabled>
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
        <!-- @include('admin.partials.footer') -->
        <!-- partial -->
    

    {{--<article>--}}
        {{--<header class="section background-primary text-center">--}}
            {{--<h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Free Responsive Template</h1>--}}
        {{--</header>--}}
        {{--<div class="section background-white">--}}
            {{--<div class="line">--}}
                {{--<div class="margin text-center">--}}
                    {{--@foreach ($products as $product)--}}
                    {{--<div class="s-12 m-12 l-4 margin-bottom">--}}
                        {{--<div class="padding-2x block-bordered border-radius">--}}
                            {{--<img class="margin-bottom-30" src="/resources/media/images/{{ $product->img }}" alt="{{ $product->title }}">--}}
                            {{--<h2 class="text-thin">{{ $product->title }}</h2>--}}
                            {{--<p class="margin-bottom-30">{{ mb_strimwidth($product->description, 0, 150, '...') }}</p>--}}
                            {{--<a class="button border-radius background-primary text-size-12 text-white text-strong" href="/product/{{ $product->id }}">Подробнее</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</article>--}}
@stop

