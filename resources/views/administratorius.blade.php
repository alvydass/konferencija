<!DOCTYPE html>
<html>
<head>
    <title>Administratoriaus posistemis</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>

<div class="loading-screen" id="loadingScreen">
    Loading...
</div>
<div class="container">
    <h1>Administratoriaus posistemis</h1>
    <p><a href="{{ route('naudotojai') }}">Sistemos naudotojų duomenų valdymas</a></p>

    <p><a href="{{ route('visos_konferencijos') }}">Konferenciju valdymas</a></p>
</div>

</body>
</html>
