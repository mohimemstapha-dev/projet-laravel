
    @extends('layouts.app')

    @section('content')

        <div class="container my-5">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary">Détails du Virment</h2>
                <a href="{{ route('virments.index') }}" class="btn btn-secondary">← Retour</a>
            </div>

            <!-- Card -->
            <div class="card shadow-lg border-0">
                <div class="card-body">

                    <div class="row">

                        <!-- Client -->
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Client</h6>
                            <p class="fs-5 fw-bold">{{ $virment->client->nom }} {{ $virment->client->prenom }}</p>
                        </div>

                        <!-- Montant -->
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Montant</h6>
                            <p class="fs-5 text-success fw-bold">{{ $virment->montant }}</p>
                        </div>

                        <!-- Motif -->
                        <div class="col-12 mb-3">
                            <h6 class="text-muted">Motif</h6>
                            <p class="fs-5">{{ $virment->motif }}</p>
                        </div>

                        <!-- Agence -->
                        <div class="col-12 mb-3">
                            <h6 class="text-muted">Agence</h6>
                            <div class="p-3 bg-light rounded">
                                <strong>{{ $virment->client->agence->nom }} </strong><br>
                                {{ $virment->client->agence->ville }}<br>
                                {{ $virment->client->agence->adresse }}
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="col-12 mb-3">
                            <h6 class="text-muted">Date du Virment</h6>
                            <p class="fs-5">{{ $virment->created_at->format('d/m/Y') }}</p>
                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="mt-4 d-flex gap-2">
                        <a href="{{ route('virments.edit',$virment->id) }}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('virments.destroy',$virment->id) }}" class="btn btn-danger" onclick="return confirm('Supprimer ce virment ?')">Supprimer</a>
                    </div>

                </div>
            </div>

        </div>
    @endsection



