@extends('layout')

@section('content')
	<div class="right-menu hidden-xs-hidden-sm hidden-md">
		<ul>
			<li class="inicio active"><a href="#top">Inicio</a></li>
			<li class="servicios"><a href="#servicios">Servicios</a></li>
			<li class="chamba"><a href="#chamba">Chamba</a></li>
			<li class="contacto"><a href="#contacto">Contacto</a></li>
		</ul>
	</div>
	<div class="container-fluid back-dog" id="inicio">
		<div class="main-banner text-center">
			<div class="legend titillium">
				<p class="top"><span class="blue_2">WE</span> LOVE</p>
				<p class="topic yellow_1">WEB DEV</p>
			</div>
			<div class="help-button titillium">
				<a class="help-you" href="#contacto">¿NECESITAS AYUDA?</a>
			</div>
		</div>
		<div class="hand-container text-center"><div class="hand animate-hand"></div></div>
	</div>

	<div class="container-fluid services-begins" id="servicios">
		<div class="row">
			<div class="container m-t-60">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="block-title"><span class="blue_1">LOS</span> <span class="blue_2">SERVICIOS</span></h2>
					<p class="text-center">
						Ayudamos a nuestros clientes a alcanzar sus objetivos a través de productos digitales (<strong>Branding</strong>, <strong>Diseño y Desarrollo Web</strong>, <strong>Marketing Digital</strong>) que les permiten tener voz y una fuerte identidad frente al mercado y su competencia en el ámbito digital.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid back_blue_2 services-container">
		<div class="row">
			<div class="container">
				<div class="service-container">
					<div class="col-xs-12 col-sm-4 col-sm-offset-1 service-icon-container">
						<div class="service-icon animate-web web"></div>
					</div>
					<div class="col-xs-12 col-sm-6 service-info-container">
						<h2 class="block-title"><span class="blue_1">WEB</span> DESIGN</h2>
						<p class="white">Conquistar el mundo a un clic de distancia.</p>
						<p class="white">La presencia web se ha vuelto una necesidad fundamental, el sitio web es una sucursal funcionando 24/7 los 365 días del año. ¡Lo sabemos! Por eso cada uno de nuestros desarrollos es único enfocado a la usabilidad, experiencia y satisfacción del usuario.</p>
					</div>
				</div>
				
				<div class="service-container">
					<div class="col-xs-12 col-sm-5 service-icon-container branding-block">
						<div class="service-icon animate-branding branding"></div>
					</div>
					<div class="col-xs-12 col-sm-5 col-sm-offset-2 service-info-container">
						<h2 class="block-title">BRANDING</h2>
						<p class="white">Una marca no se construye de la noche a la mañana ni es motivo de la casualidad.</p>
						<p class="white">Estamos convencidos que una gran marca se construye día a día con la pasión y el trabajo duro de todos los que trabajan en ella. Es por eso que nos encanta construir una marca desde cero o reconstruirla y ayudarla a crear una identidad propia con valores definidos que deje huella en su mercado.</p>
					</div>
				</div>

				<div class="service-container m-b-80">
					<div class="col-xs-12 col-sm-4 col-sm-offset-1 service-icon-container">
						<div class="service-icon animate-mkt mkt"></div>
					</div>
					<div class="col-xs-12 col-sm-6 service-info-container">
						<h2 class="block-title"><span class="blue_1">DIGITAL</span> MKT</h2>
						<p class="white">Diálogo bilateral, comunidades exitosas y soluciones en tiempo real es lo de hoy.</p>
						<p class="white">Nos hemos convertido en seres digitales, adaptándonos de forma natural a la hiperconectividad, smartphone, tablets incluso el smartTV, son una oportunidad para que tu marca llegue de manera contundente a tu audiencia.</p>
					</div>
				</div>
				
			</div>
			
			
			<div class="btn-line text-center">
				<div class="submit titillium"><a class="interesado" href="#contacto">¡LLEVA A TU MARCA MÁS ALLÁ!</a></div>
			</div>


		</div>

	</div>

	<div class="container-fluid la-chamba" id="chamba">
		<div class="row">
			<div class="container p-b-60">
				<h2 class="titillium text-center m-t-80"><span class="blue_1">LA</span> <span class="blue_2">CHAMBA</span></h2>
				<div class="text-center col-sm-8 col-sm-offset-2">
					<p>Siempre ponemos un poco de nosotros en cada proyecto, un toque personal, de nuestra pasión por hacer las cosas lo mejor posible... combinado con el ADN de la marca, investigación y mucha creatividad, logramos generar proyectos que inspiran, que despiertan emociones y que transmiten ideas y mensajes que nuestros clientes quieren hacer llegar a su público objetivo y clientes potenciales.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid clients back_gray_1">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto Artesanías VELY" href="{{ url('proyecto-branding-artesanias-vely') }}"><img src="images/portadaproyecto-vely.jpg" alt="Proyecto Branding Artesanías VELY"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto Mini Miney Moe" href="{{ url('proyecto-social-media-mini-miney-moe') }}"><img src="images/proyecto-social-media-mini-miney-moe.png" alt="Proyecto Social Media Mini Miney Moe"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto PISTONES GARAGE" href="{{ url('proyecto-desarrollo-web-pistones') }}"><img src="images/proyecto-integral-pistones.jpg" alt="proyecto integral pistones"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto LOS CAMACHOS" href="{{ url('proyecto-desarrollo-web-parque-los-camachos') }}"><img src="images/proyecto-desarrollo-web-los-camachos.png" alt="proyecto desarrollo web parque acuático los camachos"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto MARSALA" href="{{ url('proyecto-desarrollo-web-marsala') }}"><img src="images/proyecto-desarrollo-e-commerce-marsala.jpg" alt="proyecto desarrollo e-commerce marsala"></a></div>					
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto BOREAL" href="{{ url('proyecto-branding-boreal') }}"><img src="images/proyecto-desarrollo-web-boreal.jpg" alt="proyecto desarrollo web boreal"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto WOOD &amp; STONE" href="{{ url('proyecto-desarrollo-web-wood-and-stone') }}"><img src="images/wood-and-stone-blue-terrier-studio.jpg" alt="proyecto desarollo web "></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto TRANSPADEX" href="{{ url('proyecto-desarrollo-web-transpadex') }}"><img src="images/proyecto-desarrollo-web-transpadex.jpg" alt="proyecto desarrollo web transpadex"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto BOREAL" href="{{ url('proyecto-branding-selcon') }}"><img src="images/proyecto-branding-selcon.jpg" alt="proyecto branding SELCON"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto LE GARRAF" href="{{ url('proyecto-desarrollo-web-le-garraf') }}"><img src="images/proyecto-desarrollo-web-le-garraf.jpg" alt="proyecto desarrollo web le garraf"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto GYB Maquinaria pesada" href="{{ url('proyecto-desarrollo-web-gyb') }}"><img src="images/proyecto-desarrollo-web-gyb.jpg" alt="proyecto desarrollo web GYB Maquinaria pesada"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto CODIMUBA" href="{{ url('proyecto-desarrollo-web-codimuba') }}"><img src="images/proyecto-desarrollo-web-codimuba.jpg" alt="proyecto desarrollo web CODIMUBA"></a></div>
				</div>
				<div class="col-xs-12 m-t-40 m-b-40 text-center">
					<p>Ingresa a nuestro perfil de behance para ver más de nuestro trabajo.</p>
					<a class="icon-behance-logo" href="https://www.behance.net/blueterrierstudio" target="_blank" title="Ver portafolio completo en BEHANCE"></a>
				</div>
			</div>
		</div>
	</div>
@stop