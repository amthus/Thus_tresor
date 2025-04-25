<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trésors du Bénin</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .navbar-gradient {
            background: linear-gradient(to right, #2c3e50, #3498db, #1abc9c, #27ae60); /* Dégradé de couleurs */
            border-bottom: 3px solid #ecf0f1; /* Ligne de séparation élégante */
        }

        .navbar-brand, .nav-link {
            color: #ecf0f1 !important; /* Texte clair pour contraster avec le fond */
            transition: color 0.3s ease; /* Animation subtile au survol */
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #f1c40f !important; /* Couleur au survol pour l'interactivité */
        }

        .btn-primary-gradient {
            background: linear-gradient(to right, #3498db, #2980b9);
            color: #fff;
            border: none;
            transition: background 0.3s ease;
            padding: 0.5rem 1rem; /* Ajoutez un peu de rembourrage pour un meilleur aspect */
            border-radius: 0.25rem; /* Ajoutez des bords arrondis si vous le souhaitez */
            cursor: pointer; /* Indique que l'élément est cliquable */
        }

        .btn-primary-gradient:hover {
            background: linear-gradient(to right, #2980b9, #3498db);
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border-radius: 0.25rem;
        }

        .icon {
            display: inline-block;
            width: 1.2em;
            height: 1.2em;
            vertical-align: -0.15em;
            fill: currentColor;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-gradient mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('oeuvres.index') }}">
                <svg class="icon me-2" viewBox="0 0 16 16">
                    <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.95 6.95c.58.58 1.519.58 2.098 0l6.95-6.95c.58-.58.58-1.519 0-2.098L9.05.435zM7.164 2.069a.5.5 0 0 1 .672.227L9.05 4.995a.5.5 0 0 1-.228.672l-2.96 2.96a.5.5 0 0 1-.672-.228L6.936 2.3a.5.5 0 0 1 .228-.672zM5.836 13.93a.5.5 0 0 1-.672-.227L3.05 11.005a.5.5 0 0 1 .228-.672l2.96-2.96a.5.5 0 0 1 .672.228L5.164 13.7a.5.5 0 0 1-.228.672z"/>
                </svg>
                Trésors du Bénin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('oeuvres.index') }}">
                            <svg class="icon me-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-1zm0-2a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-1zm0-2a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-1zm0-2a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            Liste des œuvres
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('oeuvres.create') }}">
                            <svg class="icon me-1" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3v3a.5.5 0 0 1-.5.5v-3h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Ajouter une œuvre
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="icon me-2" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-.052z"/>
                </svg>
                <div>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>
</html>