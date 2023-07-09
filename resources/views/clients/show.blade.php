@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Détails du client</h1>

            <p><strong>Nom:</strong> {{ $client->nom_cl }}</p>
            <p><strong>Email:</strong> {{ $client->email_cl }}</p>
            <p><strong>Téléphone:</strong> {{ $client->telephone_cl }}</p>
            <p><strong>Login:</strong> {{ $client->login_cl }}</p>

            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Retour à la liste</a>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
