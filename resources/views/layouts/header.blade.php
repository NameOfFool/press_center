@section('header')
    <nav class="navbar navbar-expand-lg bg-secondary sticky-top" id="mainNav">
        <div class="container-fluid justify-content-between">
            <div class="d-flex">
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand nav-link" href="{{route  ('index')}}">Пресс-центр налоговой грамотности</a>
                    <ul class="navbar-nav navbar-light me-auto mb-2 mb-lg-0" style="color:#0c0c0c !important;">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route("main")}}">Новости</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">FAQ</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route("documents")}}">Документы</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav flex-row">
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
                                            <img src="{{Auth::user()->getPhoto()}}"
                                                 class="rounded-circle border border-2 border-"
                                                 height="40"
                                            >
                                        @else
                                            <img src="{{url("image/users/guest.png")}}"
                                                 class="rounded-circle border border-2 border-"
                                                 height="30"
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
                                               href="{{route('profile.edit')}}">{{Auth::user()->second_name}} {{Auth::user()->name}}</a>
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
        </div>
    </nav>
@show
