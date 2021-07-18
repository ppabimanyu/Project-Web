<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
        </x-slot>

        <div class="lg:flex md:flex justify-center lg:p-12 gap-x-28">
            <img class="lg:w-1/2 md:w-1/3 sm:w-96 w-96 rounded-full" src="/assets/img/about-img.svg" alt="">
            

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-4xl font-serif">Log In</h1><br>
                <div>
                    <x-jet-label class="font-serif text-lg" for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-96 rounded-full h-12" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label class="font-serif text-lg" for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-96 rounded-full h-12" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="flex justify-between mt-4">
                    <label for="remember_me" class="">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600 hover:text-yellow-600 text-base">{{ __('Remember me') }}</span>
                    </label>

                    <div class="">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-yellow-600 text-base" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div><br>

                <div class="flex justify-end">
                    <x-jet-button class="ml-4 bg-yellow-600 hover:bg-yellow-700 w-48 h-12 rounded-full flex justify-center text-lg">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
