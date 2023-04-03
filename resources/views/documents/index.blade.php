@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">

            @foreach($documents as $document)
            <div class="text-dark card-body d-flex justify-content-between">
                <span class="mb-2">{{$document->name}}</span>
                <span>{{date_format(new DateTime($document->updated_at),"d.m.y")}}</span>
                <a href="{{route("document.download",["id"=>$document->id])}}" class="fa-download fa fa-2x" aria-hidden="true"></a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
