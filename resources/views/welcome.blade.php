@extends('layouts.app')
@section('content')
    <!--Main layout-->
    <div class="container">

        <!--Section: Content-->
        <section>
            <div class="row gx-lg-5 d-flex flex-row">
                @foreach($news as $block)
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 d-flex">

                    <!-- News block -->
                    <div class="card px-3 pt-3">
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                             data-mdb-ripple-color="light">
                            <img alt="" src="{!!url("image/news/original.jpg")!!}" class="img-fluid" />
                            <a href="{{route("news",['id'=>$block->id])}}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6 text-start">
                                <u> {{date_format(date_create($block->date_of_publication),'d.m.Y H:i:s')}}</u>
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="news?news={{$block->id}}" class="text-dark">
                            <h5>{{$block->name??""}}</h5>

                            <p>{!!mb_strimwidth(base64_decode($block->content),0,100,"...")!!}</p>
                        </a>
                    </div>
                    <!-- News block -->
                </div>
                @endforeach
            </div>
        </section>
        <!--Section: Content-->

        <!-- Pagination -->
        {{$news->links()}}
    </div>
    <!--Main layout-->
@endsection
