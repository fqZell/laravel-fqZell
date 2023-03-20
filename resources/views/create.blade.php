@extends('layout.layout')

@section('page_title', 'CreateForm')

@section('content')

    <div class="AuthUser">

        <h1>Добавить товар</h1>

        <form action="{{ route('products.create') }}" method="post">

            @csrf
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="content">Описание</label>
                <textarea name="content" cols="24" rows="6" value="{{ old('content') }}"></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Добавить фото</label>
                <input type="file" name="photo">
            </div>

            <button class="form-button">Добавить</button>

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
