<section class="card mb-4 mx-auto">
<div class="card-header">{{ __('Паспорт') }}</div>

<div class="mt-6 space-y-6 card-body">
    <div class="mb-3">
        <label class="small mb-1" for="series" >{{__('Серия')}}</label>
        <input class="form-control" id="series" name="series" value="{!!optional($user->passport)->series!!}" type="text" autocomplete="series" />
        <x-input-error :messages="$errors->get('series')" class="mt-2" />
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="number">{{__('Номер')}}</label>
        <input class="form-control" id="number" name="number" value="{{optional($user->passport)->number}}" type="text" autocomplete="number" />
        <x-input-error :messages="$errors->get('number')" class="mt-2" />
    </div>
    <div class="mb-3 ">
        <label class="small mb-1" for="sex">{{__('Пол')}}</label>
        <div class="form-check">
        <input class="form-check-input" id="sex" name="sex" value="М" type="radio" checked/>
        <label for="sex" class="form-check-label">М</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" id="sex" name="sex" value="Ж" type="radio" />
        <label for="sex" class="form-check-label">Ж</label>
        <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="birth_date" >{{__('Дата рождения')}}</label>
        <input class="form-control" id="birth_date" name="birth_date" value="{{optional($user->passport)->birth_date}}" type="text" autocomplete="birth_date" />
        <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="date_of_issue" >{{__('Дата выдачи')}}</label>
        <input class="form-control" id="date_of_issue" name="date_of_issue" value="{{optional($user->passport)->date_of_issue}}" type="text" autocomplete="date_of_issue" />
        <x-input-error :messages="$errors->get('date_of_issue')" class="mt-2" />
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="issued_by" >{{__('Выдан:')}}</label>
        <input class="form-control" id="issued_by" name="issued_by" value="{{optional($user->passport)->issued_by}}" type="text" autocomplete="issued_by" />
        <x-input-error :messages="$errors->get('issued_by')" class="mt-2" />
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="code" >{{__('Код подразделения')}}</label>
        <input class="form-control" id="code" name="code" value="{{optional($user->passport)->code}}" type="text" autocomplete="code" />
        <x-input-error :messages="$errors->get('code')" class="mt-2" />
    </div>
    <button class="btn btn-primary">{{ __('Save') }}</button>
</div>
</section>
