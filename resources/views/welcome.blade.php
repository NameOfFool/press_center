<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @vite(['resources/js/app.js'])
        @vite(['resources/sass/app.scss'])
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Добро пожаловать</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Пресс-центр налоговой грамотности</a>
            <form class="d-flex input-group w-auto">
                <input
                    type="search"
                    class="form-control rounded"
                    placeholder="Search"
                    aria-label="Search"
                    aria-describedby="search-addon"
                />
                <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
            </form>
        </div>
    </nav>
</header>
    </body>
</html>
