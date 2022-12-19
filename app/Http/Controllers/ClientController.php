<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        
        return view('client.index', [
            'clients' => Client::all()
        ]);
    }

    public function create(){
        
        return view('client.create');
    }

    public function store(Request $request){
        
        $client = $request->validate([
            'client' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        Client::firstOrCreate($client);

        return redirect('/clients')->with('success', 'Client created!');
    }

    public function show(Client $client){
        
        return view('client.show', [
            'client' => $client
        ]);
    }

    public function edit(Client $client){
        
        return view('client.edit', [
            'client' => $client
        ]);
    }

    public function update(Request $request, Client $client){
        
        $formFields = $request->validate([
            'client' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

       $client->update($formFields);

        return redirect('/clients')->with('success', 'Client updated!');
    }

    public function destroy(Client $client){
        
        Client::where('id', $client->id)->delete();

        return redirect('/clients')->with('success', 'Client deleted!');
    }
}
