    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пресс центр налоговой грамотности</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
@section('territorial')
    <div class="main-nav">
        <nav class="wrap m-auto">
            <ul class="m-auto w-100">
                <li class="territorial-btn w-100">
                    <a href="#" class="territorial-btn-title w-100 text-center"><span>Территориальные органы и подведомственные учреждения</span></a>
                    <div class="city-dropdown-b" style="display:none">
                        <ul class="site-list">
                            <li class="site-list__unit">
                                <span>А</span>
                                <a class="site-list__unit__link" href="http://altay.roskazna.gov.ru">
                                    Алтайский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://amur.roskazna.gov.ru">
                                    Амурская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://arhangelsk.roskazna.gov.ru">
                                    Архангельская область и Ненецкий автономный округ							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://astrahan.roskazna.gov.ru">
                                    Астраханская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Б</span>
                                <a class="site-list__unit__link" href="http://belgorod.roskazna.gov.ru">
                                    Белгородская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://bryansk.roskazna.gov.ru">
                                    Брянская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>В</span>
                                <a class="site-list__unit__link" href="http://vladimir.roskazna.gov.ru">
                                    Владимирская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://volgograd.roskazna.gov.ru">
                                    Волгоградская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://vologodskaya.roskazna.gov.ru">
                                    Вологодская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://voronezh.roskazna.gov.ru">
                                    Воронежская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Д</span>
                                <a class="site-list__unit__link" href="http://donetsk.roskazna.gov.ru">
                                    Донецкая Народная Республика							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Е</span>
                                <a class="site-list__unit__link" href="http://birobidzhan.roskazna.gov.ru">
                                    Еврейская автономная область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>З</span>
                                <a class="site-list__unit__link" href="http://chita.roskazna.gov.ru">
                                    Забайкальский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://zaporozhye.roskazna.gov.ru">
                                    Запорожская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>И</span>
                                <a class="site-list__unit__link" href="http://ivanovskaya.roskazna.gov.ru">
                                    Ивановская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://irkutsk.roskazna.gov.ru">
                                    Иркутская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>К</span>
                                <a class="site-list__unit__link" href="http://kabardino-balkaria.roskazna.gov.ru">
                                    Кабардино-Балкарская Республика							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kaliningrad.roskazna.gov.ru">
                                    Калининградская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kaluga.roskazna.gov.ru">
                                    Калужская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kamchatka.roskazna.gov.ru">
                                    Камчатский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://karachaevocherkessia.roskazna.gov.ru">
                                    Карачаево-Черкесская Республика							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kemerovskaya.roskazna.gov.ru">
                                    Кемеровская область – Кузбасс							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kirov.roskazna.gov.ru">
                                    Кировская область							</a>
                            </li>
                        </ul>
                        <ul class="site-list">
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kostroma.roskazna.gov.ru">
                                    Костромская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://krasnodar.roskazna.gov.ru">
                                    Краснодарский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://krasnoyarsk.roskazna.gov.ru">
                                    Красноярский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kurgan.roskazna.gov.ru">
                                    Курганская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kursk.roskazna.gov.ru">
                                    Курская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Л</span>
                                <a class="site-list__unit__link" href="http://leningrad.roskazna.gov.ru">
                                    Ленинградская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://lipetsk.roskazna.gov.ru">
                                    Липецкая область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://lugansk.roskazna.gov.ru">
                                    Луганская Народная Республика							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>М</span>
                                <a class="site-list__unit__link" href="http://magadan.roskazna.gov.ru">
                                    Магаданская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mbufk.roskazna.gov.ru">
                                    Межрегиональное бухгалтерское УФК							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mkufk.roskazna.gov.ru">
                                    Межрегиональное контрактное управление Федерального казначейства							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mkru.roskazna.gov.ru">
                                    Межрегиональное контрольно-ревизионное УФК							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://moufk.roskazna.gov.ru">
                                    Межрегиональное операционное УФК							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mufksul.roskazna.gov.ru">
                                    Межрегиональное УФК в сфере управления ликвидностью							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mufkcod.roskazna.gov.ru">
                                    Межрегиональное УФК по централизованной обработке данных							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://moscow.roskazna.gov.ru">
                                    Москва							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mo.roskazna.gov.ru">
                                    Московская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://murmansk.roskazna.gov.ru">
                                    Мурманская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Н</span>
                                <a class="site-list__unit__link" href="http://nizhegorodskaya.roskazna.gov.ru">
                                    Нижегородская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://novgorod.roskazna.gov.ru">
                                    Новгородская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://novosibirsk.roskazna.gov.ru">
                                    Новосибирская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>О</span>
                                <a class="site-list__unit__link" href="http://omsk.roskazna.gov.ru">
                                    Омская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://orenburg.roskazna.gov.ru">
                                    Оренбургская область							</a>
                            </li>
                        </ul>
                        <ul class="site-list">
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://orel.roskazna.gov.ru">
                                    Орловская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>П</span>
                                <a class="site-list__unit__link" href="http://penza.roskazna.gov.ru">
                                    Пензенская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://perm.roskazna.gov.ru">
                                    Пермский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://vladivostok.roskazna.gov.ru">
                                    Приморский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://pskov.roskazna.gov.ru">
                                    Псковская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Р</span>
                                <a class="site-list__unit__link" href="http://adygeya.roskazna.gov.ru">
                                    Республика Адыгея							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://r-altay.roskazna.gov.ru">
                                    Республика Алтай							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://ufa.roskazna.gov.ru">
                                    Республика Башкортостан							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://buryatia.roskazna.gov.ru">
                                    Республика Бурятия							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://dagestan.roskazna.gov.ru">
                                    Республика Дагестан							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://ingushetia.roskazna.gov.ru">
                                    Республика Ингушетия							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kalmykia.roskazna.gov.ru">
                                    Республика Калмыкия							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://karelia.roskazna.gov.ru">
                                    Республика Карелия							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://komi.roskazna.gov.ru">
                                    Республика Коми							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://krym.roskazna.gov.ru">
                                    Республика Крым							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mariy-el.roskazna.gov.ru">
                                    Республика Марий Эл							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://mordovia.roskazna.gov.ru">
                                    Республика Мордовия							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://sakha.roskazna.gov.ru">
                                    Республика Саха (Якутия)							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://alania.roskazna.gov.ru">
                                    Республика Северная Осетия-Алания							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://tatarstan.roskazna.gov.ru">
                                    Республика Татарстан							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://tyva.roskazna.gov.ru">
                                    Республика Тыва							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://udmurtia.roskazna.gov.ru">
                                    Республика Удмуртия							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://hakasia.roskazna.gov.ru">
                                    Республика Хакасия							</a>
                            </li>
                        </ul>
                        <ul class="site-list">
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://rostov.roskazna.gov.ru">
                                    Ростовская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://ryazan.roskazna.gov.ru">
                                    Рязанская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>С</span>
                                <a class="site-list__unit__link" href="http://samara.roskazna.gov.ru">
                                    Самарская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://piter.roskazna.gov.ru">
                                    Санкт-Петербург							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://saratov.roskazna.gov.ru">
                                    Саратовская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://sahalin.roskazna.gov.ru">
                                    Сахалинская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://sverdlovsk.roskazna.gov.ru">
                                    Свердловская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://sevastopol.roskazna.gov.ru">
                                    Севастополь							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://smolensk.roskazna.gov.ru">
                                    Смоленская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://stavropol.roskazna.gov.ru">
                                    Ставропольский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Т</span>
                                <a class="site-list__unit__link" href="http://tambov.roskazna.gov.ru">
                                    Тамбовская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://tver.roskazna.gov.ru">
                                    Тверская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://tomsk.roskazna.gov.ru">
                                    Томская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://tula.roskazna.gov.ru">
                                    Тульская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://tumen.roskazna.gov.ru">
                                    Тюменская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>У</span>
                                <a class="site-list__unit__link" href="http://ulyanovsk.roskazna.gov.ru">
                                    Ульяновская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Х</span>
                                <a class="site-list__unit__link" href="http://khabarovsk.roskazna.gov.ru">
                                    Хабаровский край							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://hantymansiysk.roskazna.gov.ru">
                                    Ханты-Мансийский автономный округ - Югра							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://kherson.roskazna.gov.ru">
                                    Херсонская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Ц</span>
                                <a class="site-list__unit__link" href="http://cokr.roskazna.gov.ru">
                                    Центр по обеспечению деятельности Казначейства России							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Ч</span>
                                <a class="site-list__unit__link" href="http://chelyabinsk.roskazna.gov.ru">
                                    Челябинская область							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://chechnya.roskazna.gov.ru">
                                    Чеченская Республика							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://chuvashia.roskazna.gov.ru">
                                    Чувашская Республика							</a>
                            </li>
                        </ul>
                        <ul class="site-list">
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://chukotka.roskazna.gov.ru">
                                    Чукотский автономный округ							</a>
                            </li>
                            <li class="site-list__unit">
                                <span>Я</span>
                                <a class="site-list__unit__link" href="http://yamalo-nenetskiy.roskazna.gov.ru">
                                    Ямало-Ненецкий автономный округ							</a>
                            </li>
                            <li class="site-list__unit">
                                <a class="site-list__unit__link" href="http://yaroslavl.roskazna.gov.ru">
                                    Ярославская область							</a>
                            </li>
                        </ul>


                    </div>
                </li>
            </ul>
        </nav>
    </div>
@show
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
                                    <img
                                        src="{{Storage::url("public/image/users/guest.png")}}"
                                        class="rounded-0"
                                        height="25"
                                        alt="Black and White Portrait of a Man"
                                        loading="lazy"
                                    />
                                </a>
                                <ul
                                    class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="navbarDropdownMenuAvatar"
                                >
                                    <li>
                                        <a class="dropdown-item" href="#">Профиль</a>
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
