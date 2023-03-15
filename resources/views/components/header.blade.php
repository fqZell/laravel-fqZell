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
                    <li><a href="#">Авторизация</a></li>
                @endguest

                @auth
                    <li><a href="#">user_name</a></li>
                    <li><a href="#">Выход</a></li>
                @endauth

            </ul>

        </div>

    </nav>
</header>
