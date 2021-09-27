@extends('layouts.default')
@section('content')
    <article>
        
        <div class="section background-white">
            <div class="line">
                <div class="margin text-center">
                    @foreach ($products as $product)
                    <div class="s-12 m-12 l-4 margin-bottom">
                        <div class="padding-2x block-bordered border-radius">
                            <img class="margin-bottom-30" src="/resources/media/images/{{ $product->img }}" alt="{{ $product->title }}">
                            <h2 class="text-thin">{{ $product->title }}</h2>
                            <p class="margin-bottom-30">{{ mb_strimwidth($product->description, 0, 150, '...') }}</p>
                        
                            <a class="button border-radius background-primary text-size-10 text-white text-strong" href="/product/{{ $basket->id }}">Купить</a>
                            <a class="button border-radius background-black text-size-12 text-white text-strong" href="/product/{{ $product->id }}">Подробнее</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@stop

