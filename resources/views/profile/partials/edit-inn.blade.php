<section class="card mb-4 mx-auto">
    <form method="post" action="{{ route('inn.update') }}" class="mt-6 space-y-6 card-body">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="small mb-1" for="inn" >{{__('ИНН')}}</label>
            @if(isset($user->inn))
                <input class="form-control" id="inn" placeholder="ИНН" name="inn" {{$user->inn->INN}} type="text"/>
            @else
                <input class="form-control" id="inn" placeholder="ИНН" name="inn" type="text"/>
            @endif
            <x-input-error :messages="$errors->get('inn')" class="mt-2"/>
        </div>
        <button class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</section>
