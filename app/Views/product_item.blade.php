@extends('layouts.default')
@section('content')
<article>
    <header class="section background-primary text-center">
        <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">{{ $product->title }}</h1>
    </header>
    <div class="section background-white">
        <div class="line">
            <h2 class="text-size-30">Описание товара</h2>
            <p><img src="/resources/media/images/{{ $product->img }}" alt="{{ $product->title }}"></p>
            <p>
                {{ $product->description }}
            </p>
            <div class="line">
                <div class="margin">
                    <div class="s-12 m-12 l-6 margin-m-bottom-30">
                        <h2>Цена</h2>
                        <p>
                            {{ $product->price }}
                        </p>
                    </div>
                    <div class="s-12 m-12 l-6">
                        <h2>Категория</h2>
                        <p>
                            {{ $product->cat_title }}
                        </p>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
                    </div>                   
                </div>                
            </div>
        </div>
    </div>
</article>
@stop