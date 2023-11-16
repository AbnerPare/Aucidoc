<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cidoc') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        html,
        body {
            background-color: white;
            height: 100%;
            margin: 0;
        }

        .container-fluid {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .row {
            flex: 1;
        }

        .foot {
            /* position: fixed; */
            bottom: 0;
            width: 100%;
        }

        .gradient1-background {
            background: linear-gradient(to bottom, rgba(113, 173, 237, 0.5), rgba(255, 255, 255, 0.5));

        }

        .gradient-background {
            padding: 20px;
            background: linear-gradient(to bottom, #666, #ffffff);
            /* Autres propriétés CSS au besoin */
            /* Couleur du texte pour une meilleure lisibilité */
        }

        #maCarte {
            transition: transform 0.2s ease-in-out;
        }

        #maCarte:hover {
            transform: translateY(-15px);
        }

        .text-gradient {
            background: linear-gradient(to bottom, #787777, #ffffff);
            -webkit-background-clip: text;
            /* Permet au dégradé de traverser le texte */
            color: transparent;
            /* Rend le texte transparent */
        }
    </style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofnPfC5T5zgE0IbbV7QqFOENHoP5M1cX1" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')

    </div>

    <script>
        $(document).ready(function() {
            $('input[name="statut-filter"]').change(function() {
                var selectedStatut = $(this).val();
                var rows = $('.table tbody tr');

                rows.each(function() {
                    var row = $(this);
                    var statutCell = row.find('.statut-cell');
                    var statutText = statutCell.text().trim();

                    if (selectedStatut === 'all' || selectedStatut === statutText) {
                        row.show(); // Affichez la ligne si le filtre correspond
                    } else {
                        row.hide(); // Masquez la ligne sinon
                    }
                });
            });
        });
    </script>
    {{-- filtre des resumés --}}
    <script>
        $(document).ready(function() {
            $('input[name="statut-filter"]').change(function() {
                var selectedStatut = $(this).val();
                var cells = $('.statut-cell');

                cells.each(function() {
                    var cell = $(this);
                    var statutText = cell.text().trim();
                    if (selectedStatut === 'all' || selectedStatut === statutText) {
                        cell.closest('.col-12').show();
                    } else {
                        cell.closest('.col-12').hide();
                    }
                });
            });
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
