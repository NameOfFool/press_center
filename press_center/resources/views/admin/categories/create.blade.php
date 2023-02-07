@extends('layouts.app')
@section('content')
    <form action="{{route('new-category')}}" method="post">
        @csrf
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input name="name" placeholder="Название" />
        <x-input-label for="root" :value="__('Root Category')"/>
        <select name="root">
            @foreach($categories as $category)
                <option value="{!! $category->id !!}">{{$category->name}}</option>
            @endforeach
        </select>
        <x-primary-button class="btn btn-primary">Создать</x-primary-button>
    </form>
@endsection
