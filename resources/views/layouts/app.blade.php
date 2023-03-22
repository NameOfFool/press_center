<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    @section('head')
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <meta charset="utf-8">
        <link rel="icon" href="{{asset("favicon.ico")}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Пресс центр налоговой грамотности</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"/>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            .modal {
                max-width: 100% !important;
            }
        </style>
        <x-rich-text-trix-styles/>
    @show

</head>
<body class="h-100 d-flex flex-column flex-nowrap" style="min-height:100%;">
@include("layouts.header")
<main class="masthead flex-grow-1 d-flex flex-column flex-lg-shrink-5" style="">
    @section('content')
    @show
</main>
<!-- Footer -->
<footer class="text-center s text-lg-start bg-light text-white position-relative mt-5 w-100" style="">
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #1abc9c">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="http://fool.com:8000/">naloggrammary.ru</a>
    </div>
</footer>
</div>
</body>
</html>
