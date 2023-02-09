<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пресс центр налоговой грамотности</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"/>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
@include('layouts.territorial')
@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid justify-content-between">
            <!-- Left elements -->
            <div class="d-flex">
                <!-- Brand -->

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
                    <a class="navbar-brand nav-link" href="{{route  ('index')}}">Пресс-центр налоговой грамотности</a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Документы</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>

            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <ul class="navbar-nav flex-row d-none d-md-flex">

                <!-- Collapsible wrapper -->
            </ul>
            <!-- Center elements -->

            <!-- Right elements -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-1">
                    <form class="input-group rounded">
                        <input
                            autocomplete="off"
                            type="search"
                            class="form-control rounded"
                            placeholder="{{__("Search")}}"
                            style="min-width: 125px;"
                        />
                        <span class="input-group-text border-0 d-none d-lg-flex" id="search-addon"
                        ><i class="fas fa-search"></i
                            ></span>
                    </form>
                </li>
                <li class="nav-item me-3 me-lg-1">
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
                                <div class="dropdown align-middle my-1">
                                    <a
                                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                                        href="#"
                                        id="navbarDropdownMenuAvatar"
                                        role="button"
                                        data-mdb-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        @if(isset(Auth::user()->photo))
                                            <img src="{{url("image/users/".Auth::user()->photo)}}"
                                                 class="rounded-circle border border-2 border-"
                                                 height="30"
                                                 alt="Black and White Portrait of a Man"
                                            >
                                        @else
                                            <img src="{{url("image/users/guest.png")}}" class="w-50 rounded-circle"
                                                 height="25"
                                                 alt="Black and White Portrait of a Man"
                                            >
                                        @endif
                                    </a>
                                    <ul
                                        class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="navbarDropdownMenuAvatar"
                                    >
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{route('profile.edit')}}">{{Auth::user()->name}}</a>
                                        </li>
                                        @if(Auth::user()->admin === 1)
                                        <li>
                                            <a class="dropdown-item" href="/admin">Администратор</a>
                                        </li>
                                        @endif
                                        <li>
                                            <form method="POST" action="{{route('logout') }}">
                                                @csrf
                                                <button class="dropdown-item" type="submit">Выход</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    @endif
                </li>



            </ul>
            <!-- Right elements -->
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
