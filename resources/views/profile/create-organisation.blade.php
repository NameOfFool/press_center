@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Добавить организацию') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.organisation.create') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="organisation_name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Название организации') }}</label>

                                <div class="col-md-6">
                                    <input id="organisation_name" type="text"
                                           class="form-control @error('organisation_name') is-invalid @enderror"
                                           name="organisation_name" value="{{ old('organisation_name') }}" required
                                           autocomplete="organisation_name">

                                    @error('organisation_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="organisation_email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Почта организации') }}</label>

                                <div class="col-md-6">
                                    <input id="organisation_email" type="text"
                                           class="form-control @error('organisation_email') is-invalid @enderror"
                                           name="organisation_email" value="{{ old('organisation_email') }}" required
                                           autocomplete="organisation_email">

                                    @error('organisation_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="KPP"
                                       class="col-md-4 col-form-label text-md-end">{{ __('КПП') }}</label>

                                <div class="col-md-6">
                                    <input id="KPP" type="text"
                                           class="form-control @error('KPP') is-invalid @enderror"
                                           name="KPP" value="{{ old('KPP') }}" required
                                           autocomplete="KPP">

                                    @error('KPP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Привязвать организацию') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
