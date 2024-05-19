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
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Пользователь
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('registration')}}">Регистрация</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Вход</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>
