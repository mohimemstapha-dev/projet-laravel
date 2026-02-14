
@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            Détails du Client
        </h2>

        <div>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">
                ← Retour
            </a>
            <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-warning">
                Modifier
            </a>
             <a href="{{ route('clients.virements.voir',$client->id) }}"
                class="btn btn-outline-primary fw-bold px-4">
                    👁 Voir les Virements
             </a>

        </div>
    </div>

    <!-- Client Card -->
    <div class="card shadow-lg border-0">
        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <h6 class="text-muted">Nom</h6>
                    <p class="fs-5 fw-bold">{{ $client->nom }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <h6 class="text-muted">Prenom</h6>
                    <p class="fs-5">{{ $client->prenom }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <h6 class="text-muted">Age</h6>
                    <p class="fs-5">{{ $client->age }} ans</p>
                </div>

                <div class="col-md-6 mb-3">
                    <h6 class="text-muted">Solde</h6>
                    <p class="fs-5 text-success fw-bold">
                        {{ number_format($client->solde,2) }} DH
                    </p>
                </div>

                <div class="col-12 mt-3">
                    <h6 class="text-muted">Agence</h6>
                    <div class="p-3 bg-light rounded">
                        <strong>{{ $client->agence->nom }}</strong> <br>
                        {{ $client->agence->ville }} <br>
                        {{ $client->agence->adresse }}
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
