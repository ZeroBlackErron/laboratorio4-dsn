<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Panamericanos</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
	@yield('content')
</div>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>