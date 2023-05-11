<section class="card mb-4 mx-auto">
    <div class="card-header">{{ __('Информация об организации') }}</div>

    <div class="card-body">
        <div class="mb-3">
            <x-input-label class="small mb-1" for="org_name" :value="__('Название организации')" />
            <x-text-input class="form-control" id="org_name" name="org_name" value="{{optional(optional($user->organisation)[0])->organisation_name}}" type="text" autocomplete="org_name" />
            <x-input-error :messages="$errors->get('org_name')" class="mt-2" />
        </div>
        <div class="mb-3">
            <x-input-label class="small mb-1" for="org_email" :value="__('Почта организации')" />
            <x-text-input class="form-control" id="org_email" name="org_email" value="{{optional(optional($user->organisation)[0])->organisation_email}}" type="text" autocomplete="org_email" />
            <x-input-error :messages="$errors->get('org_email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <x-input-label class="small mb-1" for="kpp" :value="__('КПП')" />
            <x-text-input class="form-control" id="kpp" name="kpp" value="{{optional(optional(optional($user->organisation)[0])->kpp)->KPP}}" type="text" autocomplete="org_email" />
            <x-input-error :messages="$errors->get('kpp')" class="mt-2" />
        </div>
    </div>
</section>
