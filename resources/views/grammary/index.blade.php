@extends("layouts.app")
@section("content")
@foreach ($lessons as $lesson)
<div class="container">
    <div class="d-flex ">
        <div class="card w-100">
            <div class="card-body">
                <a href="{{route("grammary.lesson",["id"=>$lesson->id])}}"><h5>{{$lesson->name}}</h5></a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
