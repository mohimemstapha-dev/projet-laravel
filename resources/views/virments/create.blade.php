@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Ajouter un Nouveau Virment</h2>
        <a href="{{ route('virments.index') }}" class="btn btn-secondary">
            ← Retour
        </a>
    </div>

    <!-- Form Card -->
    <div class="card shadow-lg border-0">
        <div class="card-body">

            <form action="{{ route('virments.store') }}" method="POST">
                @csrf

                <div class="row">

                    <!-- Client Selection -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Client</label>
                        <select name="client_id" class="form-select" required>
                            <option value="">-- Choisir un client --</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->nom }} {{ $client->prenom }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Montant -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Montant (DH)</label>
                        <input type="number" step="0.01" name="montant"
                               class="form-control"  required>
                    </div>

                </div>

                <!-- Motif -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Motif</label>
                    <input type="text" name="motif" class="form-control"
                        required>
                </div>

                <!-- Buttons -->
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success px-4">
                        Ajouter
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
