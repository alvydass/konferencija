<!DOCTYPE html>
<html>
<head>
    <title>Kliento posistemis - Konferencijos sąrašas</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Konferencijų sąrašas</h1>
    <ul>
        <li><a href="{{ route('konferencija', ['id' => 1]) }}">Konferencija 1</a></li>
        <li><a href="{{ route('konferencija', ['id' => 2]) }}">Konferencija 2</a></li>
    </ul>
</div>

</body>
</html>
