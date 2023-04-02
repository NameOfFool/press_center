@extends("layouts.app")
@section("content")
    @if(!isset($news))
        <h1 class="text-center">Новостей пока нет</h1>
    @else
    <table class="table table-striped table-bordered text-center container">
        <thead>
        <tr >
            <th rowspan="2" scope="col">ID</th>
            <th rowspan="2">Название</th>
            <th rowspan="2">Дата создания</th>
            <th colspan="2">Публикация</th>
            <th rowspan="2">Редактировать</th>
        </tr>
        <tr>
            <th>Начало публикации</th>
            <th>Конец публикации</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $single)

            <tr>
                <td>{{$single->id}}</td>
                <td>{{$single->name}}</td>
                <td>{{$single->date_of_creation}}</td>
                <td>{{$single->date_of_publication}}</td>
                <td>{{$single->date_of_drop}}</td>
                <td><a href="{{route("news.edit",["id"=>$single->id])}}" class="fa-edit fa"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    <a href="{{route("news.create",["id"=>$id])}}" class="btn btn-primary w-25 mx-auto">Создать</a>
@endsection
