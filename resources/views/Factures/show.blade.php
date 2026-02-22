    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <a href="{{ route('clients.factures.historique',$facture->client) }}" class="btn btn-outline-secondary">
                ← Retour
            </a>

            <div class="text-center">
                <h3 class="fw-bold mb-1">Facture #{{ $facture->id }}</h3>
                <span class="badge bg-success rounded-pill px-3 py-2">
                    ✓ Payée
                </span>
            </div>

            <div></div>

        </div>

        <!-- Main Card -->
        <div class="row g-4">

            <!-- Résumé Financier -->
            <div class="col-md-5">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body text-center p-4">

                        <h6 class="text-muted text-uppercase">Montant Total</h6>
                        <h1 class="fw-bold text-primary display-5">
                           {{ $facture->montant }}
                        </h1>

                        <hr>

                        <p class="mb-1">
                            <strong>Type :</strong> {{ $facture->type }}
                        </p>

                        <p class="mb-1">
                            <strong>Date de création :</strong> {{ $facture->created_at->format('Y-m-d') }}
                        </p>

                        <p class="mb-0">
                            <strong>Date de paiement :</strong> {{ $facture->created_at->format('Y-m-d') }}
                        </p>

                    </div>
                </div>
            </div>

            <!-- Détails -->
            <div class="col-md-7">
                <div class="card shadow border-0 rounded-4 h-100">
                    <div class="card-body p-4">

                        <h6 class="text-uppercase text-muted mb-3">
                            Informations Client
                        </h6>

                        <p class="mb-2">
                            <strong>Nom :</strong> {{ $facture->client->nom }}
                        </p>

                        <p class="mb-2">
                            <strong>Prénom :</strong> {{ $facture->client->prenom }}
                        </p>

                        <hr>

                        <h6 class="text-uppercase text-muted mb-3">
                            Actions
                        </h6>

                        <div class="d-flex gap-2 flex-wrap">
                            <form  style="display:initial" action="{{ route('factures.destroy',$facture->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button  class="btn btn-outline-danger"  onclick="return confirm('Supprimer ce Facture ?')">
                                    🔄 Annuler
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @endsection
