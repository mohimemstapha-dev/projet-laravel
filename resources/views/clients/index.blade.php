@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Liste des Clients</h2>
    <a href="{{ route('clients.create') }}" class="btn btn-success">
        + Ajouter Client
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow">
    <div class="card-body">

        <table class="table table-bordered table-hover table-striped text-center">
            <thead class="table-dark">
                <tr>

                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Age</th>
                    <th>Solde</th>
                    <th>Agence</th>
                    <th >Actions</th>
                </tr>
            </thead>

            <tbody>
               @forelse ($clients as $client)
                    <tr>

                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->age }}</td>
                        <td>{{ $client->solde }}</td>
                        <td>{{ $client->agence->nom}}</td>
                        <td>
                            <a href="{{ route('clients.show',$client->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form  action="{{ route('clients.destroy',$client->id) }}" method="POST" class="d-inline ">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Supprimer cette Client ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Aucune Client trouvée</td>
                        </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</div>

@endsection
