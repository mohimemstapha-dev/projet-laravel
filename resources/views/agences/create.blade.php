@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Ajouter une Agence</h2>
    <a href="{{ route('agences.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('agences.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'agence</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville"  required>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>

            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="{{ route('agences.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

@endsection
