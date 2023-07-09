<?php

namespace App\Http\Controllers;

use App\Models\clients_table;
use Illuminate\Http\Request;

class ClientController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les clients
        $clients = clients_table::all();

        // Afficher la vue index avec les données des clients
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Afficher la vue create avec un formulaire vide
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom_cl' => 'required',
            'email_cl' => 'required|email|unique:clients',
            'telephone_cl' => 'required|numeric|unique:clients',
            'login_cl' => 'required|unique:clients',
            'password_cl' => 'required|confirmed'
        ]);

        // Créer un nouveau client avec les données du formulaire
        $client = new clients_table($request->all());

        // Enregistrer le client dans la base de données
        $client->save();

        // Rediriger vers la vue show avec un message de succès
        return redirect()->route('clients.show', $client)->with('success', 'Client créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients_table  $client
     * @return \Illuminate\Http\Response
     */
    public function show(clients_table $client){
        // Afficher la vue show avec les données du client
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients_table  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(clients_table $client)
    {
        // Afficher la vue edit avec le formulaire prérempli avec les données du client
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients_table  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients_table $client){
        // Valider les données du formulaire
        $request->validate([
            'nom_cl' => 'required',
            'email_cl' => 'required|email|unique:clients,email_cl,' . $client->nom_cl . ',nom_cl',
            'telephone_cl' => 'required|numeric|unique:clients,telephone_cl,' . $client->nom_cl . ',nom_cl',
            'login_cl' => 'required|unique:clients,login_cl,' . $client->nom_cl . ',nom_cl',
            'password_cl' => 'sometimes|confirmed'
        ]);

        // Mettre à jour le client avec les données du formulaire
        $client->update($request->all());

        // Rediriger vers la vue show avec un message de succès
        return redirect()->route('clients.show', $client)->with('success', 'Client modifié avec succès.');
    }


    public function destroy(clients_table $client)
    {
        // Supprimer le client de la base de données
        $client->delete();

        // Rediriger vers la vue index avec un message de succès
        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }

}
