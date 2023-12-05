<!DOCTYPE html>
<html>
<head>
    <title>Konferencijos informacija</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Konferencijos informacija</h1>
    <h2>{{ $konferencija['pavadinimas'] }}</h2>
    <p>{{ $konferencija['aprasymas'] }}</p>
</div>
</body>
</html>
