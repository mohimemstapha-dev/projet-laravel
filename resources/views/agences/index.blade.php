@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Liste des Agences</h2>
    <a href="{{ route('agences.create') }}" class="btn btn-success">
        + Ajouter Agence
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover table-striped text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Ville</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($agences as $agence)
                <tr>
                    <td>{{ $agence->nom }}</td>
                    <td>{{ $agence->ville }}</td>
                    <td>{{ $agence->adresse }}</td>
                    <td>
                        <a href="{{ route('agences.show', $agence->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('agences.edit', $agence->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('agences.destroy', $agence->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Supprimer cette agence ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Aucune agence trouvée</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-end mt-3">
            {{ $agences->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>

@endsection
