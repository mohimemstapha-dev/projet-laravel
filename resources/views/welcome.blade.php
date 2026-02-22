<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>


        .hero-section {
            background: linear-gradient(135deg, #0B3C5D, #1B6CA8);
            padding: 100px 0;
            color: white;
            text-align: center;
        }


        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.8s ease forwards;
        }

        .fade-in:nth-child(2) {
            animation-delay: 0.2s;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .services {
            margin-top: -60px;
        }


        .service-card {
            background: rgba(255, 255, 255, 0.15); /* كان 0.08 */
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 18px;
            padding: 40px 30px;
            transition: 250ms cubic-bezier(.4,0,.2,1);
            color: white;
        }


        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        }


        .service-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }


        .btn-modern {
            border-radius: 50px;
            padding: 10px 25px;
            transition: 200ms ease;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
        }

        .service-card {
            background: #1a1a1a1e;
            color: rgb(14, 1, 1);
        }
    </style>
</head>
<body>

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
</body>
</html>
