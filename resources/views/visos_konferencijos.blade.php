<!DOCTYPE html>
<html>
<head>
    <title>Visos konferencijos</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Visų konferencijų sąrašas</h1>
    <ul>
        <li><a href="{{ route('konferencija_informacija', ['id' => 1]) }}">Pirma konferencija</a></li>
        <li><a href="{{ route('konferencija_informacija', ['id' => 2]) }}">Antra konferencija</a></li>
    </ul>
</div>

</body>
</html>
