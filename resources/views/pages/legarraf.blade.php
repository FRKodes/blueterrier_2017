@extends('layout')

@section('title', 'Le Garraf es un proyecto que nos dió la libertad de experimentar con diferentes texturas a lo largo del diseño web, así como una gran satisfacción al momento de lanzar el desarrollo web para la marca.')

@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">LE GARRAF</h1>
				<h2 class="white">Proyecto sitio Web</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					<strong>Le Garraf</strong> nace en el 2014 con el objetivo de ofrecer una opción: fresca, original y divertida a los antojos de la sociedad tapatía. <br><br>
					Desde el principio, la intención fue crear una atmósfera única ofreciendo sabores de nieve artesanal fuera de lo convencional con la posibilidad de mezclarlos con una gran variedad de toppings, que son el complemento perfecto para probar una <strong>nieve como nunca lo habías  hecho antes</strong>.</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="images/le-garraf-web-01.jpg" alt="proyecto le garraf web 01"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nobis natus laboriosam voluptas saepe fugiat soluta distinctio modi aperiam debitis. Similique, dolorem possimus, debitis quae consequatur nostrum corporis quasi labore!</p> --}}
				
				<figure><img src="images/le-garraf-web-03.jpg" alt="proyecto le garraf web 03"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, qui laudantium. Sint, ab, illum! Consequatur est ad praesentium, earum ex totam suscipit, et perspiciatis, quae quis maxime voluptatem animi harum?</p> --}}
				
				<figure><img src="images/le-garraf-web-05.jpg" alt="proyecto le garraf web 05"></figure>
				<figure><img src="images/le-garraf-web-06.jpg" alt="proyecto le garraf web 06"></figure>
				<figure><img src="images/le-garraf-web-07.jpg" alt="proyecto le garraf web 07"></figure>
				<figure><img src="images/le-garraf-web-08.jpg" alt="proyecto le garraf web 08"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias amet quos, consequuntur eaque nobis quas itaque, ipsam at tempore ipsum iusto reiciendis quasi cupiditate aperiam, consectetur dignissimos, accusantium vitae reprehenderit?</p> --}}

			</div>

			<div class="col-xs-12 m-t-40 m-b-40 text-center">
				<p>Ingresa a nuestro perfil de behance para ver más de nuestro trabajo.</p>
				<a href="https://www.behance.net/blueterrierstudio" target="_blank" title="Ver portafolio completo en BEHANCE"><img src="images/behance-btn.svg" alt="behance button"></a>
			</div>

		</div>
	</div>
@stop