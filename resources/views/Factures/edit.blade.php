
    @extends('layouts.app')

    @section('content')
       <form action="{{ route('factures.update',$facture->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7">

                    <div class="card shadow border-0 rounded-4">

                        <div class="card-header bg-primary text-white rounded-top-4">
                            <h5 class="mb-0">Modifier une Facture</h5>
                        </div>

                        <div class="card-body p-4">

                            <!-- Montant -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Montant</label>
                                <div class="input-group">
                                    <span class="input-group-text">DH</span>
                                    <input name="montant" value="{{ $facture->montant }}" type="number" class="form-control" required>
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Type de facture</label>
                                <select name="type" class="form-select" required>
                                    <option value="">-- Choisir --</option>
                                    <option  @selected($facture->type==='Internet')>Internet</option>
                                    <option  @selected($facture->type==='Electricité')>Electricité</option>
                                    <option  @selected($facture->type==='Abonnement téléphone')>Abonnement téléphone</option>
                                </select>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between mt-4">

                                <a href="{{ route('clients.factures.historique',$facture->client->id) }}" class="btn btn-outline-secondary">
                                    Annuler
                                </a>

                                <button class="btn btn-primary px-4">
                                    Enregistrer
                                </button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
       </form>
    @endsection
