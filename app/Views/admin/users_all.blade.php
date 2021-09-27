@extends('layouts.admin')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Перечень клиентов\пользователей сайта </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Категории</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Таблица с полным списком пользователей сайта</h4>
                            <p class="card-description"> Есть возможность выбора пользователя для установки прав доступа или дальнейшего удаления </p>
                            <span class="d-flex align-items-center purchase-popup">
                                    <a href="/admin/client/edit">
                                     <button class="mdi mdi-more btn btn-md btn-gradient-info mt-0" > + Добавить пользователя!</button>  
                                    </a>
                                 </span>
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th> First Name </th>
                                    <th> Second Name </th>    
                                    <th> Photo </th>
                                    <th> Roll </th>
                                    <th> Last Visited </th>
                                    <th> Actions </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $client)
                                    <tr>
                                    <td><i>{{ $client->first_name }}</i></td>
                                    <td><i>{{ $client->second_name }}</i></td>
                                    <td>
                                    <img class="img-fluid"
                                    src="/resources/media/images/{{ $client->ava }}"
                                    title="Photo profile"
                                    >
                                    </td>
                                    <td>{{ $client->g_name }}</td>
                                    
                                    <td><i>{{ $client->visited_at }}</i></td>
                                    <td>
                                    <a href="/user/{{ $client->id }}"
                                    title="View"
                                    >
                                    <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="/user/edit/{{ $client->id }}"
                                    title="Edit"
                                    >
                                    <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="/user/delete/{{ $client->id }}"
                                    title="Delete"
                                    >
                                    <i class="mdi mdi-delete"></i>
                                    </a>
                                    </td>
                                    </tr>
                                    @endforeach                            
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- partial -->
    </div>

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
