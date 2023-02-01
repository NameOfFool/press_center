<section>
    <div class="col-xl-auto mx-auto">
        <div class="card mb-4 mx-auto">
            <div class="card-header">{{__("Profile Information")}}</div>
            <div class="card-body">
                <div class=" mb-4 mb-xl-0 mx-auto">
                    <form class="text-center d-flex flex-column w-25 mx-auto gap-2">
                        <img class=" rounded-circle mb-2 w-50 mx-auto"
                             src="
                             @if(isset($user->photo))
                             {{url("image/users/".$user->photo)}}" alt="">
                        @else
                            {{url("image/users/guest.png")}}" alt="">
                        @endif
                        <input type="file"/>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">{{__("Upload new image")}}</button>
                    </form>
                </div>
                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('PATCH')
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="name">{{__('Name')}}</label>
                        <x-text-input class="form-control" id="name" name="name" type="text"
                                      placeholder="Enter your username"
                                      value="{{old('name', $user->name)}}" required autofocus autocomplete="name"/>
                        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                    </div>

                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                        <x-input-label class="small mb-1" for="email" :value="__('Email')"/>
                        <x-text-input class="form-control" id="email" name="email" type="email"
                                      :value="old('email', $user->email)" required autocomplete="email"/>
                    </div>
                    <!-- Save changes button-->
                    <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>

    <div>


        <x-input-error class="mt-2" :messages="$errors->get('email')"/>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
    </form>
</section>
