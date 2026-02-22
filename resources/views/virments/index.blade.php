@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-primary">Liste des Virements</h2>
    <a href="{{ route('virments.create') }}" class="btn btn-success">
        + Ajouter un nouveau Virement
    </a>
</div>

<div class="card shadow">
    <div class="card-body table-responsive">
        <table class="table table-striped table-hover text-center align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Motif</th>
                    <th>Agence</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
            @forelse($virements as $virement)
                <tr>
                    <td>{{ $virement->client->nom }} {{ $virement->client->prenom }}</td>
                    <td class="text-success fw-bold">{{ number_format($virement->montant,2) }} DH</td>
                    <td>{{ $virement->motif }}</td>
                    <td>{{ $virement->client->agence->nom }}</td>
                    <td>{{ $virement->created_at->format('d/m/Y') }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('virments.show', $virement->id) }}"
                        class="btn btn-info btn-sm">
                            Voir
                        </a>

                        <a href="{{ route('virments.edit', $virement->id) }}"
                        class="btn btn-warning btn-sm">
                            Modifier
                        </a>

                        <form action="{{ route('virments.destroy', $virement->id) }}"
                            method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Supprimer ce virement ?')">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Aucun virement trouvé</td>
                </tr>
            @endforelse
            </tbody>
        </table>


        <div class="d-flex justify-content-end mt-3">
            {{ $virements->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>

@endsection
