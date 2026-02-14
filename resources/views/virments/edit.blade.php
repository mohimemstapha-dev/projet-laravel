
    @extends('layouts.app')

    @section('content')
        <div class="container my-5">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary">Modifier Virment</h2>
                <a href="{{ route('virments.index') }}" class="btn btn-secondary">← Retour</a>
            </div>

            <!-- Form Card -->
            <div class="card shadow-lg border-0">
                <div class="card-body">

                    <form action="{{ route('virments.update',$virment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <!-- Client Selection -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Client</label>
                                <select name="client_id" class="form-select" required>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}" @selected($client->id===$virment->client_id )>
                                            {{ $client->nom }} {{ $client->prenom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Montant -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Montant (DH)</label>
                                <input type="number" step="0.01" name="montant" value="{{ $virment->montant }}"
                                    class="form-control" value="1500.00" required>
                            </div>

                        </div>

                        <!-- Motif -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Motif</label>
                            <input type="text" name="motif" class="form-control" value="{{ $virment->motif }}"
                                value="Paiement facture internet" required>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-4 d-flex gap-2">
                            <button type="submit" class="btn btn-success px-4">Enregistrer</button>
                            <a href="{{ route('virments.index') }}" class="btn btn-secondary px-4">Annuler</a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    @endSection
