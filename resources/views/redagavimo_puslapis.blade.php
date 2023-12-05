<!DOCTYPE html>
<html>
<head>
    <title>Redaguoti naudotoją</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>

<div class="loading-screen" id="loadingScreen">
    Loading...
</div>
<div class="container">
    <h1>Redaguoti naudotoją</h1>

    <form action="{{ route('update_naudotojas', ['id' => $naudotojo_id]) }}" method="POST">
        @csrf
        <label for="vardas">Vardas:</label>
        <input type="text" id="vardas" name="vardas" required>

        <button type="submit">Patvirtinti</button>
    </form>
</div>

</body>
</html>
