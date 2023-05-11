@extends('layouts.app')
@section('content')
    <table class="table table-striped table-bordered text-center container">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Дата создания</th>
            <th>Редактировать</th>
        </tr>

        </thead>
        <tbody>
        @foreach($documents as $document)
            <tr>
            <td>{{$document->id}}</td>
                <td>{{$document->name}}</td>
                <td>{{$document->created_at}}</td>
                <td><a href="{{route("document.edit",["id"=>$document->id])}}" class="fa-edit fa">  </a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn-primary btn w-25 mx-auto" href="{{route("document.create")}}">Создать</a>
@endsection
