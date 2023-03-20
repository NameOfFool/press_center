@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('new-category')}}" method="post" class="mt-6 space-y-6">
            @csrf
            <div class="mb-3">
                <x-input-label for="name" class="form-label" :value="__('Name')"/>
                <x-text-input class="form-control" name="name" placeholder="Название"/>
            </div>
            <div class="mb-3">
                <x-input-label for="root" class="form-label select-label" :value="__('Root Category')"/>
                <select class="form-select" name="root">
                    <option value="NULL">Нет</option>
                    @foreach($categories as $category)
                        <option value="{!! $category->id !!}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <x-primary-button class="btn btn-primary">Создать</x-primary-button>
        </form>
    </div>
@endsection
