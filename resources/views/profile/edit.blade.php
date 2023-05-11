@extends('layouts.app')
@section('content')
<style>
    section{
        width:75%;
    }
</style>
    <div class="container">
        <h2 class="text-center">
            {{ __('Profile') }}
        </h2>
    </div>

    <div class="d-flex flex-column">
        <form method="post" action="{{ route('profile.update') }}" class="d-block d-flex flex-column align-items-center justify-content-center">
            @csrf
            @method('PATCH')
            @include('profile.partials.update-profile-information-form')
            @include('profile.partials.update-passport')
            @include('profile.partials.edit-inn')
            @if (is_null($user->organisation))
                <section class="space-y-6 mb-4">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                        {!! __('Вы являетесь представителем организации?') !!}
                    </h2>
                    <a class="btn btn-primary" href="{{ route('organisation.create') }}">{{ __('Добавить организацию') }}</a>
                </section>
            @else
                @include('profile.partials.update-organisation')
            @endif
        </form>
            @include('profile.partials.update-password-form')
            @include('profile.partials.delete-user-form')
    </div>
@endsection
