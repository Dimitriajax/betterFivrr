<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-input-label for="username" :value="__('Gebruikersnaam')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" required />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Wachtwoord')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Bevestig wachtwoord')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Firstname  -->
            <div class="mt-4">
                <x-input-label for="firstname" :value="__('Voornaam')" />

                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" required />

                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>
            <!--  -->
            <div class="mt-4">
                <x-input-label for="middlename" :value="__('Tussen naam (optioneel)')" />

                <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" />

                <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
            </div>
            <!--  -->
            <div class="mt-4">
                <x-input-label for="lastname" :value="__('Aachternaam')" />

                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required />

                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!--  -->
            <div class="mt-4">
                <x-input-label for="job" :value="__('Baan')" />

                <x-text-input id="job" class="block mt-1 w-full" type="text" name="job" required />

                <x-input-error :messages="$errors->get('job')" class="mt-2" />
            </div>

            <!--  -->
            <div class="mt-4">
                <x-input-label for="about" :value="__('Beschrijving')" />

                <textarea name="about" id="about" cols="30" rows="10" class="block mt-1 w-full"></textarea>
                <x-input-error :messages="$errors->get('')" class="mt-2" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Al een account?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Registeer') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>