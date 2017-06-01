@extends('layout')

@section('content')
	<div class="container-fluid back-dog">
		<div class="main-banner text-center">
			<div class="legend titillium">
				<p class="top"><span class="blue_2">WE</span> LOVE</p>
				<p class="topic yellow_1">WEB DEV</p>
			</div>
			<div class="help-button titillium">
				<a href="#">¿TE AYUDAMOS?</a>
			</div>
		</div>
		<div class="hand-container text-center"><div class="hand animate-hand"></div></div>
	</div>

	<div class="container-fluid services-begins">
		<div class="row">
			<div class="container m-t-60">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="block-title"><span class="blue_1">LOS</span> <span class="blue_2">SERVICIOS</span></h2>
					<p class="text-center">
						Ayudamos a las marcas a alcanzar su potencial a través de servicios que les permiten tener voz y una fuerte identidad frente al mercado y su competencia.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid back_blue_2 services-container">
		<div class="row">
			<div class="container">
				<div class="service-container">
					<div class="col-xs-12 col-sm-5 service-icon-container">
						<div class="service-icon animate-web web"></div>
					</div>
					<div class="col-xs-12 col-sm-7 service-info-container">
						<h2 class="block-title"><span class="blue_1">WEB</span> DESIGN</h2>
						<p class="white">Conquistar el mundo a un clic de distancia.</p>
						<p class="white">La presencia web se ha vuelto una necesidad fundamental, el sitio web es una sucursal funcionando 24/7 los 365 días del año. ¡Lo sabemos! Por eso cada uno de nuestros desarrollos es único enfocado a la usabilidad, experiencia y satisfacción del usuario.</p>
					</div>
				</div>
				
				<div class="service-container">
					<div class="col-xs-12 col-sm-5 service-icon-container branding-block">
						<div class="service-icon animate-branding branding"></div>
					</div>
					<div class="col-xs-12 col-sm-7 service-info-container">
						<h2 class="block-title">BRANDING</h2>
						<p class="white">Una marca no se construye de la noche a la mañana ni es motivo de la casualidad.</p>
						<p class="white">Estamos convencidos que una gran marca se construye día a día con la pasión y el trabajo duro de todos los que trabajan en ella. Es por eso que nos encanta construir una marca desde cero o reconstruirla y ayudarla a crear una identidad propia con valores definidos que deje huella en su mercado.</p>
					</div>
				</div>

				<div class="service-container m-b-80">
					<div class="col-xs-12 col-sm-5 service-icon-container">
						<div class="service-icon animate-mkt mkt"></div>
					</div>
					<div class="col-xs-12 col-sm-7 service-info-container">
						<h2 class="block-title"><span class="blue_1">DIGITAL</span> MKT</h2>
						<p class="white">Diálogo bilateral, comunidades exitosas y soluciones en tiempo real es lo de hoy.</p>
						<p class="white">Nos hemos convertido en seres digitales, adaptándonos de forma natural a la hiperconectividad, smartphone, tablets incluso el smartTV, son una oportunidad para que tu marca llegue de manera contundente a tu audiencia.</p>
					</div>
				</div>
				
			</div>
		</div>

	</div>

	<div class="container-fluid chamba">
		<div class="row">
			<div class="container p-t-60 p-b-60">
				<div class="btn-line text-center m-t--80">
					<div class="submit titillium">¿INTERESADO?</div>
				</div>
				<h2 class="titillium text-center m-t-80"><span class="blue_1">LA</span> <span class="blue_2">CHAMBA</span></h2>
				<div class="text-center col-sm-8 col-sm-offset-2">
					<p>Siempre ponemos un poco de nosotros en nuestro trabajo combinado con el ADN de la marca, investigación y un chingo de creatividad.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid clients back_gray_1">
		<div class="row">
			<div class="container">
				<div class="col-xs-6 col-sm-4"><a title="Ver proyecto BOREAL" href="https://www.behance.net/gallery/52711687/Boreal-website"><img src="images/boreal-logo.svg" alt="boreal logo"></a></div>
				<div class="col-xs-6 col-sm-4"><a title="Ver proyecto PISTONES GARAGE" href="https://www.behance.net/gallery/53327997/PISTONES-WEB-SITE"><img src="images/pistones-logo.svg" alt="pistones logo"></a></div>
				<div class="col-xs-6 col-sm-4"><a title="Ver proyecto GRILL POINT" href="https://www.behance.net/gallery/52711473/GrillPoint-Social-Media"><img src="images/grillpoint-logo.svg" alt="grillpoint logo"></a></div>
				<div class="col-xs-6 col-sm-4"><a title="Ver proyecto MARSALA" href="https://www.behance.net/gallery/52611079/MARSALA-WEB-SITE"><img src="images/marsala-logo.svg" alt="marsala logo"></a></div>
				<div class="col-xs-6 col-sm-4"><a title="Ver proyecto LA CURA" href="#"><img src="images/la-cura-logo.svg" class="la-cura" alt="la cura logo"></a></div>
				<div class="col-xs-6 col-sm-4"><a title="Ver proyecto LE GARRAF" href="{{ url('proyecto-desarrollo-web-le-garraf') }}"><img src="images/le-garraf-logo.svg" alt="le garraf logo"></a></div>
				<div class="col-xs-12 m-t-40 m-b-40 text-center">
					<p>Ingresa a nuestro perfil de behance para ver más de nuestro trabajo.</p>
					<a href="https://www.behance.net/blueterrierstudio" target="_blank" title="Ver portafolio completo en BEHANCE"><img src="images/behance-btn.svg" alt="behance button"></a>
				</div>
			</div>
		</div>
	</div>
@stop