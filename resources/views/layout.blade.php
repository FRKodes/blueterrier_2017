<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
		@include('partials.metas')
		@include('partials.google')
		@include('partials.styles')
		<!-- Facebook Pixel Code -->
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '491502838298564');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=491502838298564&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
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
