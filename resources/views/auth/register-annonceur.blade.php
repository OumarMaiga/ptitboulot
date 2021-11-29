<x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register_annonceur') }}">
            @csrf

            <!-- Userame -->
            <div class="mt-4">
                <x-label for="username" :value="__('Nom d\'utilisateur')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>
            
            <!-- First_name -->
            <div class="mt-4">
                <x-label for="first_name" :value="__('Prenom')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" />
            </div>
            
            <!-- Last_name -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Nom')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email Professionnelle')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Contact -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Contact')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Adresse')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Mot de passe confirmé')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
