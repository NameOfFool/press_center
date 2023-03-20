<section class="card mb-4 mx-auto">
    <div class="card-header">{{ __('Информация об организации') }}</div>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 card-body">
        @csrf
        @method('put')
        <div class="mb-3">
            <x-input-label class="small mb-1" for="org_name" :value="__('Название организации')" />
            <x-text-input class="form-control" id="org_name" name="org_name" value="{{$user->organisation[0]->organisation_name}}" type="text" autocomplete="org_name" />
            <x-input-error :messages="$errors->get('org_name')" class="mt-2" />
        </div>
        <div class="mb-3">
            <x-input-label class="small mb-1" for="org_email" :value="__('Почта организации')" />
            <x-text-input class="form-control" id="org_email" name="org_email" value="{{$user->organisation[0]->organisation_email}}" type="text" autocomplete="org_email" />
            <x-input-error :messages="$errors->get('org_email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <x-input-label class="small mb-1" for="kpp" :value="__('КПП')" />
            <x-text-input class="form-control" id="kpp" name="kpp" value="{{$user->organisation[0]->kpp->KPP}}" type="text" autocomplete="org_email" />
            <x-input-error :messages="$errors->get('kpp')" class="mt-2" />
        </div>
    </form>
</section>
