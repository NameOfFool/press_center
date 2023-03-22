<section class="card mb-4 mx-auto">
    <form method="post" action="{{ route('inn.update') }}" class="mt-6 space-y-6 card-body">
        @csrf
        @method('put')
        <div class="mb-3">
            <x-input-label class="small mb-1" for="inn" :value="__('ИНН')"/>
                <x-text-input class="form-control" id="inn" name="inn" value="{{$user->inn->INN}}" type="text"/>
            <x-input-error :messages="$errors->get('inn')" class="mt-2"/>
        </div>
        <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>
    </form>
</section>
