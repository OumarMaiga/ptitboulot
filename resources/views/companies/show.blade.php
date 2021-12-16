<x-app-layout>
    <div class="px-5">
        <h2>{{ $company->name }}</h2>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Name
            </div>
            <div style="width: 80%">
                {{ $company->name }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Adresse
            </div>
            <div style="width: 80%">
                {{ $company->address }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Téléphone
            </div>
            <div style="width: 80%">
                {{ $company->phone }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Email
            </div>
            <div style="width: 80%">
                {{ $company->email }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Date de création
            </div>
            <div style="width: 80%">
                {{ $company->creation_date }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Domaine d'activité
            </div>
            <div style="width: 80%">
                {{ $company->field }}
            </div>
        </div>
        <div class="d-flex">
            <div style="width: 20%; color: gray;">
                Description
            </div>
            <div style="width: 80%">
                {{ $company->overview }}
            </div>
        </div>
        <div class="mt-5">
            <button class="btn btn-warning">
                <a href="{{ route('company.edit', $company->slug) }}">Modifier</a>
            </button>

                <form method="POST" action="{{ route('company.destroy', $company->slug) }}" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        {{ __('Supprimer') }}
                    </button>
                </form>
        </div>
    </div>
</x-app-layout>