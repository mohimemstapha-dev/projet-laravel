
    @extends('layouts.app')

    @section('content')
       <form action="{{ route('facrures.store') }}" method="POST">
            @csrf
            <input type="hidden" name="client_id" value="{{ $id }}"
             <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7">

                    <div class="card shadow border-0 rounded-4">

                        <div class="card-header bg-primary text-white rounded-top-4">
                            <h5 class="mb-0">Ajouter une Facture</h5>
                        </div>

                        <div class="card-body p-4">

                            <!-- Montant -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Montant</label>
                                <div class="input-group">
                                    <span class="input-group-text">DH</span>
                                    <input name="montant" type="number" class="form-control" required>
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Type de facture</label>
                                <select name="type" class="form-select" required>
                                    <option value="">-- Choisir --</option>
                                    <option>Internet</option>
                                    <option>Electricité</option>
                                    <option>Abonnement téléphone</option>
                                </select>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between mt-4">

                                <a href="{{ route('clients.show',$id) }}" class="btn btn-outline-secondary">
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
