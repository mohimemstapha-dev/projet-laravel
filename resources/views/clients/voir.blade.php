
@extends('layouts.app')

@section('content')

<div class="container my-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Virements du Client</h2>
        <a href="{{ route('clients.show',$client->id) }}" class="btn btn-secondary">← Retour</a>
    </div>

    <!-- Virements List -->
    <div class="row g-3">

        <!-- Exemple Card Virment -->
        <div class="d-flex flex-row flex-wrap gap-3">

    @forelse ($client->virements as $virment)
        <div class="card shadow-sm border-0" style="width: 18rem;">
            <div class="card-body d-flex flex-column justify-content-between">

                <div>
                    <h5 class="card-title fw-bold">{{ $virment->motif }}</h5>
                    <p class="card-text text-muted mb-1">
                        Date: {{ $virment->created_at->format('d/m/Y') }}
                    </p>
                    <p class="card-text text-success fw-bold mb-0">
                        Montant: {{ number_format($virment->montant,2) }} DH
                    </p>
                </div>

                <div class="mt-3 d-flex gap-2">
                    <a href="{{ route('virments.edit',$virment->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('virments.destroy',$virment->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Supprimer ce virements ?')">Supprimer</button>
                    </form>
                </div>

            </div>
        </div>
    @empty
        <div class="card shadow-sm border-0" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title fw-bold">Aucun virements trouvé</h5>
            </div>
        </div>
    @endforelse

</div>


    </div>

</div>
@endSection
