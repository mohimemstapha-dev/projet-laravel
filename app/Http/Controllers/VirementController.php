<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Virement;
use Illuminate\Http\Request;
class VirementController extends Controller
{
    //
    public function index()
    {
        $virements=Virement::all();

        return view('virments.index',compact('virements'));
    }
    public function create()
    {
        $clients=Client::all();

        return view('virments.create',compact('clients'));
    }
    public function store(Request $request)
    {
        Virement::create($request->all());

        return to_route('virments.index');
    }
    public function show($id)
    {   $virment=Virement::findOrFail($id);

        return view('virments.show',compact('virment'));
    }
    public function edit($id)
    {
        $virment=Virement::findOrFail($id);
        $clients=Client::all();

        return view('virments.edit',compact('virment','clients'));
    }
    public function update(Request $request, $id)
    {
        $virment=Virement::findOrFail($id);
        $virment->update($request->all());

        return to_route('virments.index');

    }
    public function destroy($id)
    {
        Virement::findOrFail($id)->delete();

        return to_route('virments.index');
    }

}
