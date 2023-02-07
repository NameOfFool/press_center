@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            <label>Category:</label>
            <br>
            <br>
            <br>
            <ul id="tree1">
                @foreach($categories as $category)
                    <li> <input type="radio"  id="parent_id" name="parent_id" value="{{ $category->id }}">
                        <label for="parent_id"> {{ $category->title }}</label><br>
                    </li>
                    @if(count($category->childs))
                        @include('admin.categories.sub_category',['childs' => $category->childs])
                    @endif
                @endforeach
            </ul>
            @if ($errors->has('parent_id'))
                <span class="text-red" role="alert">
                           <strong>{{ $errors->first('parent_id') }}</strong>
                           </span>
            @endif
        </div>
            <a href="{{route("category.create")}}" class="btn btn-primary">Создать</a>
    </div>
@endsection
