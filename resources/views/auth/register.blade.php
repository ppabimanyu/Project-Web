<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
        </x-slot>

        <div class="lg:flex md:flex justify-center lg:p-12 gap-x-28">
            <img class="lg:w-1/2 md:w-1/3 sm:w-96 w-96 rounded-full" src="/assets/img/about-img.svg" alt="">
            

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="text-4xl font-serif">Register</h1><br>
                <div>
                    <x-jet-label for="name" class="font-serif text-lg" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-96 rounded-full h-12" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" class="font-serif text-lg" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-96 rounded-full h-12" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" class="font-serif text-lg" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-96 rounded-full h-12" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" class="font-serif text-lg" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-96 rounded-full h-12" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-yellow-600 text-base" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4 bg-yellow-600 hover:bg-yellow-700 w-48 h-12 rounded-full flex justify-center text-lg">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
