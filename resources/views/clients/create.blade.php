@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Ajouter un Client</h2>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">
            ← Retour
        </a>
    </div>

    <!-- Form Card -->
    <div class="card shadow-lg border-0">
        <div class="card-body">

            <form action="{{ route('clients.store') }}" method="POST">
                @csrf

                <div class="row">

                    <!-- Nom -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>

                    <!-- Prenom -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Prenom</label>
                        <input type="text" name="prenom" class="form-control"required>
                    </div>

                </div>

                <div class="row">

                    <!-- Age -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Age</label>
                        <input type="number" name="age" class="form-control" required>
                    </div>

                    <!-- Solde -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Solde</label>
                        <input type="number" step="0.01" name="solde"
                               class="form-control" required>
                    </div>

                    <!-- Agence -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Agence</label>
                        <select name="agence_id" class="form-select" required>
                            <option value="">-- Choisir une agence --</option>
                            @foreach ($agences as $agence)
                                <option value="{{ $agence->id }}">
                                    {{ $agence->nom }}
                                </option>
                            @endforeach
                        </select>
                    </div>

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
