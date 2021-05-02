<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <title>Recommandation Manga & Webtoons</title>
    <style>
        @media (max-width: 600px) {
            .form-responsive {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>
    @include('incs.navbar')
    @yield('content')
</body>
</html>