@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            <h3>{{__("Category")}}:</h3>
            <div class="col-md-6">
                @include("admin.categories.tree")
            </div>
            @if ($errors->has('parent_id'))
                <span class="text-red" role="alert">
                           <strong>{{ $errors->first('parent_id') }}</strong>
                           </span>
            @endif
        </div>
        <a href="{{route("category.create")}}" class="btn btn-primary">Создать</a>
    </div>
    <script type="module" src="tree.js"></script>
@endsection
