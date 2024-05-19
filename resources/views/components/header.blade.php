<header class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="" style="width: 100px; height: 70px; object-fit: cover" src="{{asset('images/logo.png')}}" alt="logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Меню</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">О нас</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Рецепты</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">

                @auth()
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Username
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Личный кабинет</a></li>
                                <li><a class="dropdown-item" href="">Выход</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><u>Ты админ?</u></a></li>
                            </ul>

                        </div>
                @endauth

                @guest()
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Пользователь
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('registration')}}">Регистрация</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Вход</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><u>Ты админ?</u></a></li>
                        </ul>

                    </div>
                @endguest

                </form>
            </div>
        </div>
    </nav>
</header>
