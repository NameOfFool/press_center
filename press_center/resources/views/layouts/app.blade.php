    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пресс центр налоговой грамотности</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
@include('layouts.territorial')
<div class="container">
    @section('header')
        <header class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Пресс-центр налоговой грамотности</a>
                <form class="d-flex input-group w-auto">
                    <input
                        type="search"
                        class="form-control rounded"
                        placeholder="Поиск"
                        aria-label="Search"
                        aria-describedby="search-addon"
                    />
                    <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
                </form>
            </div>
        </header>
    @show
    <!-- Navbar -->
    @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="/">
                        <img
                            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                            height="15"
                            alt="Logo"
                            loading="lazy"
                        />
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/about">О проекте</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/FAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/docs">Документы</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                @if(!Auth::check())
                    <div class="d-flex align-items-center">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Войти</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Регистрация</a>
                            </li>
                        </ul>
                        @else
                            <!-- Меню пользователя-->
                            <div class="dropdown">
                                <a
                                    class="dropdown-toggle d-flex align-items-center hidden-arrow"
                                    href="#"
                                    id="navbarDropdownMenuAvatar"
                                    role="button"
                                    data-mdb-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    @if(isset(Auth::user()->photo))
                                        <img src="{{url("image/users/".Auth::user()->photo)}}" alt="" class="rounded-0"
                                             height="25"
                                             alt="Black and White Portrait of a Man"
                                             loading="lazy">
                                    @else
                                        <img src="{{url("image/users/guest.png")}}" alt="" class="rounded-0"
                                             height="25"
                                             alt="Black and White Portrait of a Man"
                                             loading="lazy">
                                    @endif
                                </a>
                                <ul
                                    class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="navbarDropdownMenuAvatar"
                                >
                                    <li>
                                        <a class="dropdown-item" href="{{route('profile.edit')}}">{{Auth::user()->name}}</a>
                                    </li>
                                    <li>
                                      <form method="POST" action="{{route('logout') }}">
                                            @csrf
                                          <button class="dropdown-item" type="submit">Выход</button>
                                      </form>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>

            </div>
        </nav>
    @show
    <main>
        @section('content')
        @show
    </main>
</div>
</body>
</html>
