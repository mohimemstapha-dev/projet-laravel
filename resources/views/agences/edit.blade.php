@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Modifier une Agence</h2>
    <a href="{{ route('agences.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('agences.update',$agence->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'agence</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $agence->nom }}" required>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" value="{{ $agence->ville }}"  required>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $agence->adresse }}" required>
            </div>

            <button type="submit" class="btn btn-success">Enregistrer</button>
            <a href="{{ route('agences.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

@endsection
