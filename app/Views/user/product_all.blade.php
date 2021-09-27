@extends('layouts.user')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Список товаров </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Категории</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Товары</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bordered table</h4>
                            <p class="card-description"> Add class <code>.table-bordered</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Price </th>
                                    <th> Icon </th>
                                    <th> Title </th>
                                    <th> Actions </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                    <img class="img-fluid"
                                    src="/resources/media/images/{{ $product->img }}"
                                    alt="{{ $product->title }}"
                                    >
                                    </td>
                                    <td>{{ $product->title }}</td>
                                    <td>
                                    <a href="/user/product/view/{{ $product->id }}"
                                    title="View"
                                    >
                                    <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="/user/product/edit/{{ $product->id }}"
                                    title="Edit"
                                    >
                                    <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="/user/product/delete/{{ $product->id }}"
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
