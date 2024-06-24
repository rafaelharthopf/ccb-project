<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #CDD4DC;
            font-family: Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .custom-btn {
            background-color: #033D60;
            border-color: #033D60;
        }
        .custom-btn-2 {
            background-color: #CDD4DC;
            border-color: #49656C;
        }
        .custom-btn-2:hover {
            background-color: #49656C;
            border-color: #CDD4DC;
        }
        .logo {
            max-width: 200px;
        }
        .navbar-brand-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .content {
            flex: 1;
        }
        footer {
            background-color: #033D60;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
<div class="container mt-5 content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="{{ route('people.index') }}">
            <img src="{{ asset('logoCCB.png') }}" alt="Logo" class="img-fluid">
        </a>
        <a class="navbar-brand navbar-brand-center" href="{{ route('people.index') }}">
            REUNIÃO GERAL ADMINISTRATIVA - ALTA SOROCABANA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('people.index') }}">Listar Presenças</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="mt-4">
        @yield('content')
    </div>
</div>

<footer>
    <p>&copy; 2024 CCB ALTA SOROCABANA. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
