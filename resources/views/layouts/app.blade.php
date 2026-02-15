<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion Banque</title>

    <!-- Bootstrap CSS -->
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route("home") }}">Banque App</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agences.index') }}">Agences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('clients.index') }}">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('virments.index') }}">Virements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        © {{ date('Y') }} Gestion Banque - Tous droits réservés
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
