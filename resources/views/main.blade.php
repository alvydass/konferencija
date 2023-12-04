<!DOCTYPE html>
<html>
<head>
    <title>Studento informacija</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>

<div class="loading-screen" id="loadingScreen">
    Loading...
</div>
<div class="container">
    <h1>Studento informacija</h1>
    <p>Vardas: Alvydas</p>
    <p>Pavardė: Stanius</p>
    <p>Grupė: PIT-20I-NT</p>

    <p><a href="{{ route('klientas') }}" onclick="showLoading()">Kliento posistemis</a></p>
    <p><a href="{{ route('darbuotojas') }}" onclick="showLoading()">Darbuotojo posistemis</a></p>
    <p><a href="{{ route('administratorius') }}" onclick="showLoading()">Sistemos administratoriaus posistemis</a></p>
</div>
</body>
</html>
