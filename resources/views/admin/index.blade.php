@extends("layouts.app")
@section('content')
    <div class="container d-flex justify-content-around">
        <a href="{{route("category")}}" class="btn btn-primary">Новости</a>
        <a href="{{route("tags")}}" class="btn btn-primary">Документы</a>
    </div>
@endsection
