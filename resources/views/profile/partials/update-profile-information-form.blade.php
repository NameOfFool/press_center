<section>
    <div class="col-xl-auto mx-auto">
        <div class="card mb-4 mx-auto">
            <div class="card-header">{{__("Profile Information")}}</div>
            <div class="card-body">
                <div class=" mb-4 mb-xl-0 mx-auto">
                    <div class="text-center d-flex flex-column w-25 mx-auto gap-2">
                        <img class=" rounded-circle mb-2 w-50 mx-auto"
                             src="
                             @if(isset($user->photo))
                             {{Auth::user()->getPhoto()}}" alt="">
                        @else
                            {{url("image/users/guest.png")}}" alt="">
                        @endif

                        <a href="{{route('upload')}}" class="btn btn-primary" data-mdb-riddle-duration="0" type="button">{{__("Upload new image")}}</a>
                    </div>
                </div>
                <div>

                    <div class="mb-3">
                        <label class="small mb-1" for="second_name">{{__('Second Name')}}</label>
                        <x-text-input class="form-control" id="second_name" name="second_name" type="text"
                                      placeholder="Enter your second name"
                                      value="{{old('second_name', $user->second_name)}}" required autofocus autocomplete="second name"/>
                        <x-input-error class="mt-2" :messages="$errors->get('second_name')"/>
                    </div>
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="name">{{__('Name')}}</label>
                        <x-text-input class="form-control" id="name" name="name" type="text"
                                      placeholder="Enter your name"
                                      value="{{old('name', $user->name)}}" required autofocus autocomplete="name"/>
                        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="">{{__('Announcement')}}</label>
                        <x-text-input class="form-control" id="announcement" name="announcement" type="text"
                                      placeholder="Enter your announcement"
                                      value="{{old('announcement', $user->announcement)}}" required autofocus autocomplete="announcement"/>
                        <x-input-error class="mt-2" :messages="$errors->get('announcement')"/>
                    </div>
                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                        <x-input-label class="small mb-1" for="email" :value="__('Email')"/>
                        <x-text-input class="form-control" id="email" name="email" type="email"
                                      :value="old('email', $user->email)" required autocomplete="email"/>
                    </div>
                    <!-- Save changes button-->
                    <button class="btn btn-primary">{{ __('Save') }}</button>
                </div>
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
</section>
