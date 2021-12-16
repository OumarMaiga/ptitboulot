<x-app-layout>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Raison social</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Date de création</th>
                <th>Domaine</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ substr($company->overview, 0, 45) }}...</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->creation_date }}</td>
                    <td>{{ $company->field }}</td>
                    <td>
                        <a href="{{ route('company.show', $company->slug) }}">Voir</a>
                        <a href="{{ route('company.edit', $company->slug) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('company.create') }}" class="btn btn-success">Créer une entreprise</a>
</x-app-layout>