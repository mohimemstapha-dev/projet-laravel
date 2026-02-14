@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            Détails de l'Agence
        </h2>

        <a href="{{ route('agences.index') }}" class="btn btn-secondary">
            ← Retour
        </a>
    </div>

    <!-- Card Information -->
    <div class="card shadow-lg border-0 mb-4">
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-muted">Nom</h5>
                    <p class="fs-5 fw-bold">{{ $agenceWithClients->nom }}</p>
                </div>

                <div class="col-md-6">
                    <h5 class="text-muted">Ville</h5>
                    <p class="fs-5">{{ $agenceWithClients->ville }}</p>
                </div>
            </div>

            <div class="mt-3">
                <h5 class="text-muted">Adresse</h5>
                <p>{{ $agenceWithClients->adresse }}</p>
            </div>

        </div>
    </div>

    <!-- Clients Section -->
    <div class="card shadow border-0">
        <div class="card-header bg-dark text-white">
            Clients de cette Agence ({{ $agenceWithClients->clients->count() }})
        </div>

        <div class="card-body p-0">

            <table class="table table-striped table-hover text-center mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Solde</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($agenceWithClients->clients as $client)
                        <tr>
                            <td>{{ $client->nom }}</td>
                            <td>{{ $client->prenom }}</td>
                            <td>{{ $client->age }}</td>
                            <td class="text-success fw-bold">
                                {{ number_format($client->solde,2) }} DH
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">
                                Aucun client dans cette agence
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection
