@extends('layout.layout')

@section('page_title', 'Home')

@section('content')

    <div class="container">

        @include('components.slider')

        <div class="search-form">
            <form method="get" action="/">
                <input type="text" placeholder="Поиск..." name="query">
            </form>
        </div>

        <div class="products">
            @foreach($products as $product)

                <div class="product">

                    <img src="{{ $product->image_url }}" alt="">

                    <h3><a href="#">{{ $product->title }}</a></h3>
                    <p><a href="#">{{ $product->content }}</a></p>

                </div>

            @endforeach
        </div>

{{--        @include('components.products')--}}

    </div>

@endsection
