@extends('layouts.app')
@section('content')
    <div class="container">
        <!--Section: News of the day-->
        <div class="row gx-5">
            <div class="col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                    <img src="{{url('image/news/original.jpg')}}" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <h4><strong>{{$news->name}}</strong></h4>
                <div class="text-muted">{!!base64_decode($news->content)!!}</div>
            </div>
        </div>

        <!--Section: News of the day-->
    </div>
    @endsection
