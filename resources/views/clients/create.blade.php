@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau client</h1>

            <form action="{{ route('clients.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nom_cl" class="form-label">Nom</label>
                    <x-jet-input id="nom_cl" name="nom_cl" type="text" value="{{ old('nom_cl') }}" required autofocus />
                    @error('nom_cl')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email_cl" class="form-label">Email</label>
                    <x-jet-input id="email_cl" name="email_cl" type="email" value="{{ old('email_cl') }}" required />
                    @error('email_cl')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telephone_cl" class="form-label">Téléphone</label>
                    <x-jet-input id="telephone_cl" name="telephone_cl" type="text" value="{{ old('telephone_cl') }}" required />
                    @error('telephone_cl')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="login_cl" class="form-label">Login</label>
                    <x-jet-input id="login_cl" name="login_cl" type="text" value="{{ old('login_cl') }}" required />
                    @error('login_cl')
                    <div class="alert alert-danger">{{ $message }}</div>
