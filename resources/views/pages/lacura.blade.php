@extends('layout')

@section('title', 'La Cura es un proyecto del cual tenemos el privilegio de llevar la gestión de sus redes sociales, así como diseñado aplicaciones físicas como menús y piezas de uso diario.')

@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">LA CURA</h1>
				<h2 class="white">Proyecto Social Media</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					Originario de la ciudad de Hermosillo Sonora, <strong>La Cura</strong> es un restaurant de mariscos que tiene como premisa siempre ofrecer a sus clientes lo mejor de la comida del mar con los ingredientes más frescos (originarios de  hermosillo) y de la mejor calidad. <br><br>
					El <strong>diseño de aplicaciones</strong> físicas como menús, publicidad impresa, anuncios de prensa, la gestión de sus <strong>redes sociales</strong> y <strong>producción fotográfica</strong> son algunos de los servicios que hemos desarrollado a lo largo de poco más de un año.
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="images/la-cura-social-media-01.jpg" alt="proyecto La Cura social media 01"></figure>
				<figure><img src="images/la-cura-social-media-02.jpg" alt="proyecto La Cura social media 02"></figure>
				<figure><img src="images/la-cura-social-media-04.jpg" alt="proyecto La Cura social media 04"></figure>
				<figure><img src="images/la-cura-social-media-05.jpg" alt="proyecto La Cura social media 05"></figure>
				<figure><img src="images/la-cura-social-media-06.jpg" alt="proyecto La Cura social media 06"></figure>
				<figure><img src="images/la-cura-social-media-07.jpg" alt="proyecto La Cura social media 07"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias amet quos, consequuntur eaque nobis quas itaque, ipsam at tempore ipsum iusto reiciendis quasi cupiditate aperiam, consectetur dignissimos, accusantium vitae reprehenderit?</p> --}}

			</div>

			<div class="col-xs-12 m-t-40 m-b-40 text-center">
				<p>Ingresa a nuestro perfil de behance para ver más de nuestro trabajo.</p>
				<a href="https://www.behance.net/blueterrierstudio" target="_blank" title="Ver portafolio completo en BEHANCE"><img src="images/behance-btn.svg" alt="behance button"></a>
			</div>

		</div>
	</div>
@stop