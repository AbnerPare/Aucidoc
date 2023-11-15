<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cidoc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            height: 100%;
            margin: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        @media (max-width: 767px) {
            body {
                background-image: url('img/bien.png');
            }
        }

        @media (min-width: 768px) {
            body {
                background-image: url('img/Bienvenu.png');
            }
        }

        .navbar-nav.ml-auto {
            margin-left: auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand bg-success ">
        <a href="{{ URL::to('/') }}" class="navbar-brand" style="margin-left: 5%;">
            <img src="img/logo.png" alt="Logo" width="80px" height="auto">
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto" style="margin-right: 5%;">
                @if (Route::has('login'))
                    <div class="text-center">
                        @auth
                            <a href="{{ url('/accueil') }}" class="btn btn-primary">Accueil</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-info">Connexion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-danger">créer</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>
</body>

</html>
