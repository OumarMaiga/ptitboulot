<x-app-layout>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>budget</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td>{{ $offer->title }}</td>
                    <td>{{ substr($offer->overview, 0, 45) }}...</td>
                    <td>{{ $offer->address }}</td>
                    <td>{{ $offer->budget }}</td>
                    <td>
                        <a href="{{ route('offer.show', $offer->slug) }}">Voir</a>
                        <a href="{{ route('offer.edit', $offer->slug) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('offer.create') }}" class="btn btn-success">Créer une offre</a>
</x-app-layout>