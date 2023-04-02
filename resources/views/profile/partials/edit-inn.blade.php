<section class="card mb-4 mx-auto">
    <form method="post" action="{{ route('inn.update') }}" class="mt-6 space-y-6 card-body">
        @csrf
        @method('put')
        <div class="mb-3">
            <x-input-label class="small mb-1" for="inn" :value="__('ИНН')"/>
            @if(isset($user->inn))
                <x-text-input class="form-control" id="inn" placeholder="ИНН" name="inn" {{$user->inn->INN}} type="text"/>
            @else
                <x-text-input class="form-control" id="inn" placeholder="ИНН" name="inn" type="text"/>
            @endif
            <x-input-error :messages="$errors->get('inn')" class="mt-2"/>
        </div>
        <button class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</section>
