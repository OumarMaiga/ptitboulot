<x-app-layout>
    <x-auth-card>
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification de profil') }}
        </h2>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('profil.update', $user->id) }}">
            @csrf
            @method('put')

            <!-- Userame -->
            <div class="mt-4">
                <x-label for="username" :value="__('Nom d\'utilisateur')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{ $user->username }}" required />
            </div>
            
            <!-- First_name -->
            <div class="mt-4">
                <x-label for="first_name" :value="__('Prenom')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $user->first_name }}" />
            </div>
            
            <!-- Last_name -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Nom')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $user->last_name }}" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email Professionnelle')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
            </div>

            <!-- Contact -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Contact')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $user->phone }}" />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Adresse')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $user->address }}" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Modifier') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
