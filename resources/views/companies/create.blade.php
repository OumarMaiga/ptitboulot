<x-app-layout>
    <h2>Créer une entreprise</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
    <form method="POST" action="{{ route('company.store') }}">
        @csrf

        <!-- Nom Entreprise -->
        <div>
            <x-label for="name" :value="__('Raison social')" class="font-semibold uppercase text-sm" />
            <x-input id="name" class="block mt-1 w-3/5" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <!-- Description -->
        <div>
            <x-label for="overview" :value="__('Description')" class="font-semibold uppercase text-sm" />
            <x-input id="overview" class="block mt-1 w-3/5" type="text" name="overview" :value="old('overview')" />
        </div>
        <!-- Adresse -->
        <div>
            <x-label for="address" :value="__('Adresse')" class="font-semibold uppercase text-sm" />
            <x-input id="address" class="block mt-1 w-3/5" type="text" name="address" :value="old('address')" />
        </div>
        <!-- Phone -->
        <div>
            <x-label for="phone" :value="__('Telephone')" class="font-semibold uppercase text-sm" />
            <x-input id="phone" class="block mt-1 w-3/5" type="text" name="phone" :value="old('phone')" />
        </div>
        <!-- Email -->
        <div>
            <x-label for="email" :value="__('Email')" class="font-semibold uppercase text-sm" />
            <x-input id="email" class="block mt-1 w-3/5" type="text" name="email" :value="old('email')" />
        </div>
        <!-- Date de creation -->
        <div>
            <x-label for="creation_date" :value="__('Date de creation')" class="font-semibold uppercase text-sm" />
            <x-input id="creation_date" class="block mt-1 w-3/5" type="text" name="creation_date" :value="old('creation_date')" />
        </div>
        <!-- Domaine -->
        <div>
            <x-label for="field" :value="__('Domaine d\'activité')" class="font-semibold uppercase text-sm" />
            <x-input id="field" class="block mt-1 w-3/5" type="text" name="field" :value="old('field')" />
        </div>
        
        <x-button class="mt-2">
            {{ __('Créer') }}
        </x-button>
    </form>
</x-app-layout>