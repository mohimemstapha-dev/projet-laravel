<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index()
    {
        // $agences=Agence::all();

        $agences = Agence::paginate(10);
        return view('agences.index',compact('agences'));
    }

    public function create()
    {
        return view("agences.create");
    }

    public function store(Request $request){
        Agence::create($request->all());
        return to_route('agences.index');
    }
    public function edit(Agence $agence){

        return view('agences.edit',compact('agence'));
    }
    public function update(Request $request,$id){
        $agence=Agence::findOrFail($id);
        $agence->update($request->all());
        return to_route('agences.index');
    }
    public function show(Agence $agence){

        $agenceWithClients=$agence->load('clients');
        return view('agences.show',compact('agenceWithClients'));
    }

    public function destroy(Agence $agence){
        $agence->delete();
        return to_route('agences.index');
    }

}
