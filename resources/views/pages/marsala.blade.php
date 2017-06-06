@extends('layout')

@section('title', 'MARSALA es un desarrollo Web con E-commerce, el cual puede ser administrado en su totalidad por el cliente, productos, categorías y el contenido de las páginas.')

@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">MARSALA</h1>
				<h2 class="white">Proyecto sitio Web</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					<strong>MARSALA</strong> es una marca de accesorios de lujo para viajeros. La personalidad misma de la marca nos motivó a mantener el diseño y la gráfica del sitio web limpio y claro, con un estilo minimalista que deja bien claro que "menos es más".
					<br><br>
					Es un desarrollo Web con E-commerce, el cual puede ser administrado en su totalidad por el cliente, productos, categorías y el contenido de las páginas.
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="images/marsala-web-01.jpg" alt="proyecto MARSALA web 01"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nobis natus laboriosam voluptas saepe fugiat soluta distinctio modi aperiam debitis. Similique, dolorem possimus, debitis quae consequatur nostrum corporis quasi labore!</p> --}}
				
				<figure><img src="images/marsala-web-03.jpg" alt="proyecto MARSALA web 03"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, qui laudantium. Sint, ab, illum! Consequatur est ad praesentium, earum ex totam suscipit, et perspiciatis, quae quis maxime voluptatem animi harum?</p> --}}
				
				<figure><img src="images/marsala-web-04.jpg" alt="proyecto MARSALA web 05"></figure>
				<figure><img src="images/marsala-web-06.jpg" alt="proyecto MARSALA web 06"></figure>
				<figure><img src="images/marsala-web-08.jpg" alt="proyecto MARSALA web 08"></figure>
				<figure><img src="images/marsala-web-09.jpg" alt="proyecto MARSALA web 09"></figure>
				
				{{-- <p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias amet quos, consequuntur eaque nobis quas itaque, ipsam at tempore ipsum iusto reiciendis quasi cupiditate aperiam, consectetur dignissimos, accusantium vitae reprehenderit?</p> --}}

			</div>

			<div class="col-xs-12 m-t-40 m-b-40 text-center">
				<p>Ingresa a nuestro perfil de behance para ver más de nuestro trabajo.</p>
				<a href="https://www.behance.net/blueterrierstudio" target="_blank" title="Ver portafolio completo en BEHANCE"><img src="images/behance-btn.svg" alt="behance button"></a>
			</div>

		</div>
	</div>
@stop