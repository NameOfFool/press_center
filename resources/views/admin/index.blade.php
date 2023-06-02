@extends("layouts.app")
@section('content')
    <div class="container d-flex justify-content-around align-items-center h-100 text-center">
        <a href="{{route("category")}}" class="btn btn-primary">Новости</a>
        <a href="{{route("tags")}}" class="btn btn-primary">Уроки</a>
        <a href="{{route("tags")}}" class="btn btn-primary">Документы</a>
    </div>
@endsection
