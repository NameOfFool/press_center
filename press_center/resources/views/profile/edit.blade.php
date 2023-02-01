@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">
            {{ __('Profile') }}
        </h2>
    </div>

    <div class="d-flex align-items-center justify-content-center">
        <div class="">
            @include('profile.partials.update-profile-information-form')
            @include('profile.partials.update-password-form')
            @include('profile.partials.delete-user-form')

        </div>
    </div>
@endsection
