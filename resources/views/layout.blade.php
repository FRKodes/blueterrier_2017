<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
		@include('partials.metas')
		@include('partials.styles')
		@include('partials.google')
	</head>
	<body id="top">
		<header>@include('partials.nav')</header>
		<section>@yield('content')</section>
		<footer>@include('partials.footer')</footer>
		<script src="js/app.js"></script>
		@include('partials.hotjar')
		<a target="_blank" class="whatsapp" href="https://api.whatsapp.com/send?phone=523317074070">
			<img src="/images/whatsapp-icon.png" alt="¿Tienes alguna duda? Escríbenos por WhatsApp">
		</a>
	</body>
</html>
