<x-app-layout>
    <h2>Modifier une entreprise</h2>
    <form method="post" action="{{ route('offer.update', $offer->slug) }}">
        @csrf
        @method('put')

        <!-- Titre -->
        <div>
            <x-label for="title" :value="__('Raison social')" class="font-semibold uppercase text-sm" />
            <x-input id="title" class="block mt-1 w-3/5" type="text" name="title" :value="$offer->title" required autofocus />
        </div>
        <!-- Adresse -->
        <div>
            <x-label for="address" :value="__('Adresse')" class="font-semibold uppercase text-sm" />
            <x-input id="address" class="block mt-1 w-3/5" type="text" name="address" :value="$offer->address" />
        </div>
        <!-- Budget -->
        <div>
            <x-label for="budget" :value="__('Budget')" class="font-semibold uppercase text-sm" />
            <x-input id="budget" class="block mt-1 w-3/5" type="text" name="budget" :value="$offer->budget" />
        </div>
        <!-- Entreprise -->
        <div>
            <x-label for="company" :value="__('Entreprise')" class="font-semibold uppercase text-sm" />
            <select name="company" id="company">
                <option value="">-- Veuillez choisir --</option>
                @foreach ($companies as $company)
                    <option value="{{$company->id}}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <!-- Description -->
        <div>
            <x-label for="overview" :value="__('Description')" class="font-semibold uppercase text-sm" />
            <x-input id="overview" class="block mt-1 w-3/5" type="text" name="overview" :value="$offer->overview" />
        </div>
        
        <x-button class="mt-2">
            {{ __('Modifier') }}
        </x-button>
    </form>
</x-app-layout>