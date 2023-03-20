@extends('layout.layout')

@section('page_title', 'CreateForm')

@section('content')

    <div class="AuthUser">

        <h1>Редактировать товар</h1>

        <form action="{{ route('products.update', $product) }}" method="post">

            @csrf
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" value="{{ $product->title }}">
            </div>

            <div class="form-group">
                <label for="content">Описание</label>
                <textarea name="content" cols="24" rows="6" value="{{ $product->content }}"></textarea>
            </div>

            <div class="image-preview">
                <img src="{{ $product->image_url }}" alt="">
            </div>

            <style>
                .image-preview {
                    margin: 30px 0;
                    height: 400px;
                }

                .image-preview img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            </style>

            <div class="form-group">
                <label for="photo">Добавить фото</label>
                <input type="file" name="photo">
            </div>

            <button class="form-button">Редактировать</button>

        </form>

        @if($errors->any())

            @foreach($errors->all() as $error)

                <div class="error" role="alert">
                    {{ $error }}
                </div>

            @endforeach

        @endif

    </div>

@endsection
