@extends('layout_eng')
@section('title', 'LE GARRAF is a project which have us the chance to experiment with textures into the website design, also was awesome to view the hype from the community around the development.')
@section('description', 'LE GARRAF offers to it\'s clients the traditional "nieve de garrafa" in a cooler way, adding toppings, flavors and not conventional elements. We had the opportunity to collaborate with them developing their website, standing out the band\'s identity and showing why they are the best.')
@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">LE GARRAF</h1>
				<h2 class="white">Web Development Project</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					LE GARRAF was born in 2014 focused on to offer a whole new ice cream option, original, fresh and funny way to please the Mexican people craving. <br><br>
					Since the beginning, the idea was to create an unique atmosphere offering traditional ice cream thinking out of the box with the possibility of adding a big kind of toppings, which are the perfect compliment to enjoy the ice cream as you never viewed. <br><br>
					Link: <br>
					<a href="http://www.legarraf.mx/" target="_blank" title="Ver página de LE GARRAF">www.legarraf.mx</a>
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="/images/le-garraf-web-01.jpg" alt="proyecto le garraf web 01"></figure>
				<figure><img src="/images/le-garraf-web-03.jpg" alt="proyecto le garraf web 03"></figure>
				<figure><img src="/images/le-garraf-web-05.jpg" alt="proyecto le garraf web 05"></figure>
				<figure><img src="/images/le-garraf-web-06.jpg" alt="proyecto le garraf web 06"></figure>
				<figure><img src="/images/le-garraf-web-07.jpg" alt="proyecto le garraf web 07"></figure>
				<figure><img src="/images/le-garraf-web-08.jpg" alt="proyecto le garraf web 08"></figure>
			</div>

			@include('partials.btn-see-behance')

		</div>
	</div>
@stop