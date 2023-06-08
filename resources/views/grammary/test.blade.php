@extends('layouts.app')
@section('content')
    <form class="container" method="post"  action="{{route("grammary.post")}}">
        @csrf
        <input type="hidden" name="lesson" value="{{$id}}">
        @foreach ($questions as $question)
        <div class="">
            <h1 class="text-left">Вопрос {{$question->id}} </h1>
            <p id="description" class="fs-5">{{$question->question}}</p>
            
            <div class="d-flex flex-column gap-2">
            @foreach ($question->answers as $answer)
                <div class="">
                    <input type="radio" class="form-check-input" name="{{$question->id}}" value="{{$answer->id}}">
                    <label class="form-check-label">{{$answer->answer}}</label>
                </div>
            @endforeach
            </div>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary" id="crop">Сохранить</button>
    </form>
@endsection
