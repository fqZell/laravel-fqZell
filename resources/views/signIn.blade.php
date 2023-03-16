@extends('layout.layout')

@section('page_title', 'sigIn')

@section('content')

    <div class="AuthUser">

        <h1>Авторизация</h1>

        <form action="{{ route('auth.signIn') }}" method="post">

            @csrf

            <div class="form-group">
                <label for="email">Почта:</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password">
            </div>

            <button class="form-button">Авторизация</button>

        </form>

        @if($errors->any())

            @foreach($errors->all() as $error)

                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>

            @endforeach

        @endif

    </div>

@endsection
