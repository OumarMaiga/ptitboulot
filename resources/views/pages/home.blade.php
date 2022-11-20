<x-app-layout>
    <div class="container">

        <h2>Home</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Url</th>
                    <th>Client</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Budget</th>
                    <th>Date creation</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    <tr>
                        <td>{{ $offer->title }}</td>
                        <td>{{ $offer->slug }}</td>
                        <td>{{ $offer->name }}</td>
                        <td>{{ $offer->contact }}</td>
                        <td>{{ $offer->email }}</td>
                        <td>{{ $offer->address }}</td>
                        <td>{{ $offer->budget }}</td>
                        <td>{{ $offer->created_at }}</td>
                        <td>{{ $offer->state }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>