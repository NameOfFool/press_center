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
        <tr>
        @foreach($documents as $document)
            <td>{{$document->id}}</td>
                <td>{{$document->name}}</td>
                <td>{{$document->created_at}}</td>
                <td><a href="" class="fa-edit fa"></td>
        @endforeach
        </tr>
        </tbody>
    </table>
    <a class="btn-primary btn w-25 mx-auto" href="{{route("document.create")}}">Создать</a>
@endsection
