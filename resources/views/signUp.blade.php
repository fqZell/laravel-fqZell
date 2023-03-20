@extends('layout.layout')

@section('page_title', 'signUp')

@section('content')

    <div class="AuthUser">

        <h1>Регистрация</h1>

        <form action="{{ route('auth.signUp') }}" method="post">

            @csrf
            <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" name="username" value="{{ old('username') }}">
            </div>

            <div class="form-group">
                <label for="email">Почта:</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password">
            </div>

            <div class="form-group">
                <label for="password">Повторите пароль:</label>
                <input type="password" name="re_password">
            </div>

            <button class="form-button">Регистрация</button>

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
