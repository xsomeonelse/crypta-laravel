<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<title>@yield('title', 'CRYPTA')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/urku.css">
	<link rel="stylesheet" type="text/css" href="/css/_aurora-pack.css">
	<link rel="stylesheet" type="text/css" href="/css/aurora-pack.css">
	<link rel="stylesheet" type="text/css" href="/css/aurora-theme-base.css">

	<script type="text/javascript" src="/js/app.js" defer></script>
</head>
<body class="top-fixed">
	@include('partials.headerNav')
	@yield('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	@include('cookieConsent::index')
</body>
@include('partials.scripts')
<footer class="ae-container-fluid rk-footer">
	@include('partials.footerNav')
</footer>
</html>