<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function create($id){
        return view("factures.create",compact("id"));
    }

    public function store(Request $request)
    {
        $facture=new Facture();
        $facture->montant=$request->montant;
        $facture->type=$request->type;
        $facture->client_id=$request->client_id;
        $facture->save();
        return to_route("clients.factures.historique",$request->client_id);

    }

    public function edit($id)
    {   $facture=Facture::findOrFail($id);
        return view("factures.edit",compact('facture'));
    }

    public function updateFacture(Request $request,$id)
    {
        $facture=Facture::findOrFail($id);
        $facture->montant=$request->montant;
        $facture->type=$request->type;
        $facture->save();
        return to_route('clients.factures.historique',$facture->client);
    }

    public function historique($id)
    {
        $client=Client::findOrFail($id);
        $factures=$client->factures;
        return view('factures.historique',compact("client","factures"));
    }

    public function update(Request $request,$id)
    {
        $facture=Facture::findOrFail($id);
        $client=$facture->client;

        $facture->status=$request->status;
        $facture->save();
        return to_route('clients.factures.historique',$client->id);
    }

    public function show($id)
    {   $facture=Facture::findOrFail($id);
        return view("factures.show",compact('facture'));
    }

    public function destroy($id)
    {
        $facture=Facture::findOrFail($id);
        $facture->delete();
        return to_route('clients.factures.historique',$facture->client->id);
    }
}
