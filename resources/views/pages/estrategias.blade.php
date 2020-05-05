@extends('layout')

@section('content')
	<style>
		.mtop-60{
			margin-top: 60px
		}

		.mtop-30{
			margin-top: 30px
		}

		@media screen and (min-width: 768px){
			
			.mtop-80-desktop{
				margin-top: 80px;
			}
			.mtop-60-desktop{
				margin-top: 60px;
			}
		}
	</style>
	
	<div class="container mtop-60-desktop">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<h1 class="block-title blue_1" style="font-size: 3.3em">NUESTRA VISIÓN DE LA ESTRATEGIA DE MARKETING PARA LA CUARENTENA</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
				<img src="/images/blue-terrier.jpg" alt="Tony de blue terrier" style="width: 100%; height: auto; display: inline-block">
			</div>
		</div>
		
		<div class="row mtop-30">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
				<p>Son tiempos en los que las personas están pasando más tiempo en línea, por lo tanto, la clave está en ponernos creativos y saber aprovechar esta gran ola.</p>
				<p>Herramientas como Google Trends te servirán para mantenerte informado, encontrar áreas de oportunidad, conocer el estado de ánimo de tus clientes y conectar con su sentir. Con esto puedes crear conexiones entre tendencias y tu producto para generar contenido de calidad enfocado a necesidades específicas. No olvides brindar información actualizada sobre horarios y medios alternativos de atención.</p>
				<p>Como equipo nos dimos cuenta que la planeación es importante, pero no una regla universal. Debemos estar preparados para adaptarnos a nuevas formas de trabajar y ser productivos en cualquier momento, cada quien desde su trinchera.</p>
				<p>Las relaciones con nuestros clientes se han vuelto más profundas y han pasado a un nivel más personal. Debemos estar alertar para ajustarnos y entender de manera activa las necesidades de nuestros clientes, mismas que van mutando semana a semana.</p>
				<p>Si quieres saber más consejos y experiencias de otros emprendedores y colegas del medio puedes checar este enlace (<i>donde colaboramos, cof...cof...</i>) al artículo completo de nuestros canaradas en su sitio web <a href="https://themonopolitan.com/2020/05/estrategias-de-marketing" target="_blank" title="Ver la nota completa en The Monopolitan"><strong>TheMonopolitan.com</strong></a>, seguro habrá algo que puedas implementar en tu negocio para aligerar la situación actual.</p>
			</div>
		</div>
		
	</div>
	

	<div class="container-fluid services-begins" id="servicios" style="margin-top: 0">
		<div class="row">
			<div class="container m-t-60">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="block-title"><span class="blue_1">¿QUIÉNES</span> <span class="blue_2">SOMOS?</span></h2>
					<p class="text-left">
						Somos un estudio que desarrolla proyectos a la medida con un equipo multidisciplinario. Ayudamos a nuestros clientes a alcanzar sus objetivos a través de productos digitales (<strong>Branding</strong>, <strong>Diseño y Desarrollo Web</strong>, <strong>Marketing Digital</strong>) que les permiten tener voz y una fuerte identidad frente al mercado y su competencia en el ámbito digital.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid la-chamba" id="chamba">
		<div class="row">
			<div class="container p-b-60">
				<h2 class="titillium text-center m-t-80"><span class="blue_1">ALGO DE </span> <span class="blue_2">NUESTRA CHAMBA</span></h2>
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