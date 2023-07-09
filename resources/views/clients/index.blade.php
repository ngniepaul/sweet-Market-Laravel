@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des clients</h1>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">Créer un nouveau client</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Login</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->nom_cl }}</td>
                        <td>{{ $client->email_cl }}</td>
                        <td>{{ $client->telephone_cl }}</td>
                        <td>{{ $client->login_cl }}</td>
                        <td>
                            <a href="{{ route('clients.show', $client) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $clients->links() }}
        </div>
    </div>
</div>
@endsection
