<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('node_modules/dayjs/dayjs.min.js') }}"></script>
</head>
<body>
@include('layouts.navbar')
<div class="container">
    @yield('content')
</div>

</body>
</html>
