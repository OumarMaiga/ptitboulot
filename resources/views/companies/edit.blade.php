<x-app-layout>
    <h2>Modifier une entreprise</h2>
    <form method="post" action="{{ route('company.update', $company->slug) }}">
        @csrf
        @method('put')

        <!-- Nom Entreprise -->
        <div>
            <x-label for="name" :value="__('Raison social')" class="font-semibold uppercase text-sm" />
            <x-input id="name" class="block mt-1 w-3/5" type="text" name="name" :value="$company->name" required autofocus />
        </div>
        <!-- Description -->
        <div>
            <x-label for="overview" :value="__('Description')" class="font-semibold uppercase text-sm" />
            <x-input id="overview" class="block mt-1 w-3/5" type="text" name="overview" :value="$company->overview" />
        </div>
        <!-- Adresse -->
        <div>
            <x-label for="address" :value="__('Adresse')" class="font-semibold uppercase text-sm" />
            <x-input id="address" class="block mt-1 w-3/5" type="text" name="address" :value="$company->address" />
        </div>
        <!-- Phone -->
        <div>
            <x-label for="phone" :value="__('Telephone')" class="font-semibold uppercase text-sm" />
            <x-input id="phone" class="block mt-1 w-3/5" type="text" name="phone" :value="$company->phone" />
        </div>
        <!-- Email -->
        <div>
            <x-label for="email" :value="__('Email')" class="font-semibold uppercase text-sm" />
            <x-input id="email" class="block mt-1 w-3/5" type="text" name="email" :value="$company->email" />
        </div>
        <!-- Date de creation -->
        <div>
            <x-label for="creation_date" :value="__('Date de creation')" class="font-semibold uppercase text-sm" />
            <x-input id="creation_date" class="block mt-1 w-3/5" type="text" name="creation_date" :value="$company->creation_date" />
        </div>
        <!-- Domaine -->
        <div>
            <x-label for="field" :value="__('Domaine d\'activité')" class="font-semibold uppercase text-sm" />
            <x-input id="field" class="block mt-1 w-3/5" type="text" name="field" :value="$company->field" />
        </div>
        
        <x-button class="mt-2">
            {{ __('Modifier') }}
        </x-button>
    </form>
</x-app-layout>