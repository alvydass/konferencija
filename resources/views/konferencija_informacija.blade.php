<!DOCTYPE html>
<html>
<head>
    <title>Konferencijos informacija</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    @if(isset($konferencija))
        <h1>{{ $konferencija['pavadinimas'] }}</h1>
        <p>{{ $konferencija['aprasymas'] }}</p>
        <h2>Registracija:</h2>
        <ul>
            @foreach($konferencija['registracija'] as $dalyvis)
                <li>{{ $dalyvis }}</li>
            @endforeach
        </ul>
    @else
        <p>Konferencija nerasta</p>
    @endif
</div>

</body>
</html>
