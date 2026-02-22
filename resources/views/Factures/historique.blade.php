@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
             <a href="{{ route('clients.show',$client->id) }}" class="btn btn-outline-secondary">
                ← Retour
            </a>
            <div>
                <h3 class="fw-bold">Historique des Factures</h3>
                <small class="text-muted">Client : {{ $client->nom  }} {{ $client->prenom }}</small>
            </div>

            <a href="{{ route('factures.create',$client->id) }}" class="btn btn-primary">
                + Nouvelle Facture
            </a>
        </div>

        <!-- Card -->
        <div class="card shadow border-0 rounded-4">
            <div class="card-body p-4">

                <div class="table-responsive">

                    <table class="table align-middle table-hover">

                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                                @forelse ($factures as $facture)
                                    <tr>
                                        <td>{{ $facture->id }}</td>
                                        <td>
                                            <span class="badge bg-info">{{ $facture->type }}</span>
                                        </td>
                                        <td class="fw-semibold">{{ $facture->montant }}</td>
                                        <td>{{ $facture->created_at->format('Y-m-d') }}</td>
                                        <td >
                                                @if($facture->status === 'payee')

                                                    <span class="badge rounded-pill bg-success px-3 py-2">
                                                        ✓ Payée
                                                    </span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger px-3 py-2">
                                                        ⏳ Non payée
                                                    </span>
                                                @endif
                                        </td>
                                        <td>
                                            @if ($facture->status === 'payee')
                                                <a href="{{ route("factures.show",$facture->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-eye"></i> Voir
                                                </a>


                                                    <form style="display:initial" action="{{ route('factures.destroy',$facture->id) }}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn btn-outline-danger"
                                                        onclick="return confirm('Supprimer ce Facture ?')">
                                                            🔄 Annuler
                                                        </button>
                                                    </form>
                                            @else
                                                <form style="display: initial" action="{{ route('factures.update',$facture->id) }}" method="POST" >
                                                    @csrf
                                                    @method("PATCH")
                                                   <input type="hidden" name="status" value="payee" />
                                                    <button  class="btn btn-success btn-sm">
                                                         <i class="fas fa-check"></i> Payee
                                                    </button>
                                                </form>


                                                <a href="{{ route('facrures.edit',$facture->id) }}" class="btn btn-warning btn-sm text-white">
                                                    <i class="fas fa-edit"></i> Modifier
                                                </a>
                                            @endif
                                        </td>
                                @empty
                                            <tr>
                                                <td colspan="4" class="text-center py-5">
                                                    <div class="text-muted">
                                                        <div class="mb-2">
                                                            <i class="bi bi-receipt" style="font-size: 2.5rem;"></i>
                                                        </div>
                                                        <h6 class="fw-semibold mb-1">Aucune facture trouvée</h6>
                                                        <small>Ce client n’a encore aucune facture enregistrée.</small>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tr>
                            @endforelse





                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
