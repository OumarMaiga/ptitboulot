<x-app-layout>
    <div class="px-5">
        <h2>{{ $offer->title }}</h2>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Adresse
            </div>
            <div style="width: 80%">
                {{ $offer->address }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Budget
            </div>
            <div style="width: 80%">
                {{ $offer->budget }}
            </div>
        </div>
        @if ($offer->company != NULL)
            <div class="d-flex">
                <div style="width: 20%; color: gray;">
                    Entreprise
                </div>
                <div style="width: 80%">
                    {{ $offer->company->name }}
                </div>
            </div>
        @endif
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Description
            </div>
            <div style="width: 80%">
                {{ $offer->overview }}
            </div>
        </div>
        <div class="mt-5">
            <button class="btn btn-warning">
                <a href="{{ route('offer.edit', $offer->slug) }}">Modifier</a>
            </button>

                <form method="POST" action="{{ route('offer.destroy', $offer->slug) }}" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        {{ __('Supprimer') }}
                    </button>
                </form>
        </div>
    </div>
</x-app-layout>