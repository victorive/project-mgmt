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

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
