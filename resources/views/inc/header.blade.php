
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{asset('images/logos/logo_horiz.png')}}" height="30" alt="1study">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto text-md-center text-left">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('categories.index') }}">Категории <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Как это работает</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Цены</a>
            </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto text-md-center text-left">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Город
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Алматы</a>
                    <a class="dropdown-item" href="#">Нур-Султан</a>
                    <a class="dropdown-item" href="#">Шымкент</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto text-md-center text-left">
            @guest('web')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
            @endguest

            @auth('web')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                </li>
            @endauth

        </ul>
    </div>
</nav>
