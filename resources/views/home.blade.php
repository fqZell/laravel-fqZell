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

        @include('components.products')

        {{ $products->links('components.paginate') }}

    </div>

@endsection
