<header>
    <nav>

        <div class="logo">

            <a href="{{ route('home') }}"><h1>SAFQ</h1></a>

        </div>

        <div class="links">

            <ul>
                <li><a href="#">Товары</a></li>
                <li><a href="#">Информация</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>

        </div>

        <div class="users">

            <ul>

                @guest
                    <li><a href="{{ route('signUp') }}">Регистрация</a></li>
                    <li><a href="{{ route('signIn') }}">Авторизация</a></li>
                @endguest

                @auth
                    <li><a href="#">{{ Auth::user()->username }}</a></li>
                    <li><a href="{{ route('auth.logOut') }}">Выход</a></li>
                @endauth

            </ul>

        </div>

    </nav>
</header>
