<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'NEXORA') }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="container">
        <h1>{{ config('app.name', 'NEXORA') }}</h1>
        <p>Bienvenue sur le site de NEXORA.</p>
        <a href="{{ route('home') }}">Accéder au site</a>
    </main>
</body>
</html>
