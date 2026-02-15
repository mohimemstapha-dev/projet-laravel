@extends('layouts.app')

@section('content')



<!-- ===== HERO ===== -->
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold fade-in">
            Système de Gestion Bancaire
        </h1>

        <p class="lead mt-3 fade-in">
            Plateforme moderne pour gérer efficacement agences, clients et virements.
        </p>

        <a href="{{ route('agences.index') }}"
           class="btn btn-light btn-modern mt-4 fade-in">
           Commencer
        </a>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services pb-5">
    <div class="container">
        <div class="row text-center g-4">

            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="service-icon">🏦</div>
                    <h4 class="fw-bold">Agences</h4>
                    <p class="mt-3">
                        Gestion complète des agences bancaires.
                    </p>
                    <a href="{{ route('agences.index') }}"
                       class="btn btn-primary btn-modern mt-3">
                        Accéder
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="service-icon">👤</div>
                    <h4 class="fw-bold">Clients</h4>
                    <p class="mt-3">
                        Gestion des comptes et informations clients.
                    </p>
                    <a href="{{ route('clients.index') }}"
                       class="btn btn-success btn-modern mt-3">
                        Accéder
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="service-icon">💸</div>
                    <h4 class="fw-bold">Virements</h4>
                    <p class="mt-3">
                        Gestion des opérations de virement bancaire.
                    </p>
                    <a href="{{ route('virments.index') }}"
                       class="btn btn-danger btn-modern mt-3">
                        Accéder
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
