<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients=Client::all();
        return view('clients.index',compact('clients'));
    }
    public function create()
    {   $agences=Agence::all();
        return view('clients.create',compact('agences'));
    }
    public function store(Request $request)
    {
        Client::create($request->all());
        return to_route('clients.index');
    }
    public function edit($id)
    {
        $client=Client::findOrFail($id);
        $agences=Agence::all();
        return view('clients.edit',compact('client','agences'));
    }
    public function update(Request $request,$id)
    {
        $client=Client::findOrFail($id);
        $client->update($request->all());
        return to_route('clients.index');
    }
    public function show($id)
    {
        $client=Client::findOrFail($id);

        return view('clients.show',compact('client'));
    }
    public function voir($id){

       $client=Client::with('virements')->findOrFail($id);

       return view('clients.voir',compact('client'));
    }
    public function destroy($id){
        $client=Client::findOrFail($id);
        $client->delete();
        return to_route('clients.index');
    }
}
