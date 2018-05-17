@extends('layout_eng')

@section('content')
	<div class="right-menu hidden-xs-hidden-sm hidden-md">
		<ul>
			<li class="inicio en active"><a href="#top">Home</a></li>
			<li class="servicios en"><a href="#servicios">Services</a></li>
			<li class="chamba en"><a href="#chamba">Our work</a></li>
			<li class="contacto en"><a href="#contacto">Contact</a></li>
		</ul>
	</div>
	<div class="container-fluid back-dog" id="inicio">
		<div class="main-banner text-center">
			<div class="legend titillium">
				<p class="top"><span class="blue_2">WE</span> LOVE</p>
				<p class="topic yellow_1">WEB DEV</p>
			</div>
			<div class="help-button titillium">
				<a class="help-you" href="#contacto">WE CAN HELP YOU!</a>
			</div>
		</div>
		<div class="hand-container text-center"><div class="hand animate-hand"></div></div>
	</div>

	<div class="container-fluid services-begins" id="servicios">
		<div class="row">
			<div class="container m-t-60">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="block-title"><span class="blue_1">WHAT</span> <span class="blue_2"> WE DO</span></h2>
					<p class="text-center">
						We help brands to achieve it's objectives through digital products, such as <strong>Branding</strong>, <strong>Logo Design</strong>, <strong>Web Development</strong> or <strong>Digital Marketing</strong>, which gives them have a strong identity and make them stand out from the crowd in the digital world.
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
						<h2 class="block-title"><span class="blue_1">WEB</span> DEVELOPMENT</h2>
						<p class="white">To conquer the world, is just a click away.</p>
						<p class="white">A website is a basic need these days, is a 24 hrs. a day branch for your business, every single day. We know it! and you should too, Thay's way every single website we build is made focused in usability, user experience and of course user satisfaction.</p>
					</div>
				</div>
				
				<div class="service-container">
					<div class="col-xs-12 col-sm-5 service-icon-container branding-block">
						<div class="service-icon animate-branding branding"></div>
					</div>
					<div class="col-xs-12 col-sm-5 col-sm-offset-2 service-info-container">
						<h2 class="block-title">BRANDING</h2>
						<p class="white">A great brand is not build in a snap! even not is just a coincidence.</p>
						<p class="white">We are convinced that a great brand id built day by day with passion and hard work, that's why we love to build brands from scratch or event re build it and to create a unique identity with well defined values that make impact and conect with people.</p>
					</div>
				</div>

				<div class="service-container m-b-80">
					<div class="col-xs-12 col-sm-4 col-sm-offset-1 service-icon-container">
						<div class="service-icon animate-mkt mkt"></div>
					</div>
					<div class="col-xs-12 col-sm-6 service-info-container">
						<h2 class="block-title"><span class="blue_1">DIGITAL</span> MKT</h2>
						<p class="white">Bilateral dialog, successful comunities and real time solutions.</p>
						<p class="white">We are digital beigns, adapting in a natural way to the hiperconectivity, smartphones, tables and even smart TVs are an opportunity to get close to your audience.</p>
					</div>
				</div>				
			</div>
			
			
			<div class="btn-line text-center">
				<div class="submit titillium"><a class="interesado" href="#contacto">GET YOUR BRAND ONE STEP BEYOND!</a></div>
			</div>


		</div>

	</div>

	<div class="container-fluid la-chamba" id="chamba">
		<div class="row">
			<div class="container p-b-60">
				<h2 class="titillium text-center m-t-80"><span class="blue_1">OUR</span> <span class="blue_2">WORK</span></h2>
				<div class="text-center col-sm-8 col-sm-offset-2">
					<p>Each project has a little bit from us, our personal touch, from our passion to do our work in the most perfect way... combined with the brand's DNA, research and a lot of creativity we achieve to generate inspirational projects, which awaken emotions and transmit ideas and messages that clients want to spead to the whole world.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid clients back_gray_1">
		<div class="row">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project LE GARRAF" href="{{ url('/en/web-development-le-garraf') }}"><img src="images/proyecto-desarrollo-web-le-garraf.jpg" alt="web development project le garraf"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project GYB Machinery and Minery" href="{{ url('/en/web-development-logo-design-gyb') }}"><img src="images/proyecto-desarrollo-web-gyb.jpg" alt="web development project GYB Maquinaria pesada"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project PISTONES GARAGE" href="{{ url('/en/web-development-pistones-garage') }}"><img src="images/proyecto-integral-pistones.jpg" alt="integral project pistones"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project WOOD &amp; STONE" href="{{ url('/en/web-development-wood-and-stone') }}"><img src="images/wood-and-stone-blue-terrier-studio.jpg" alt="web development project wood and stone"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project TRANSPADEX" href="{{ url('/en/web-development-transpadex-logistics') }}"><img src="images/proyecto-desarrollo-web-transpadex.jpg" alt="web development project transpadex"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project SELCON Instalaciones" href="{{ url('/en/branding-project-selcon') }}"><img src="images/proyecto-branding-selcon.jpg" alt="branding project SELCON"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project BOREAL" href="{{ url('/en/branding-project-boreal') }}"><img src="images/proyecto-desarrollo-web-boreal.jpg" alt="web development project boreal"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project MARSALA" href="{{ url('/en/web-development-ecommerce-marsala') }}"><img src="images/proyecto-desarrollo-e-commerce-marsala.jpg" alt="e-commerce web development project marsala"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="View project CODIMUBA" href="{{ url('/en/web-development-codimuba') }}"><img src="images/proyecto-desarrollo-web-codimuba.jpg" alt="web development project CODIMUBA"></a></div>
				</div>
				<div class="col-xs-12 m-t-40 m-b-40 text-center">
					<p> Check our Behance profile, to see more about our work. <br> You won't regret ;)</p>
					<a class="icon-behance-logo" href="https://www.behance.net/blueterrierstudio" target="_blank" title="Check our whole portfolio at BEHANCE"></a>
				</div>
			</div>
		</div>
	</div>
@stop