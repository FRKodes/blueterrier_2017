@extends('layout_eng')
@section('title', 'BOREAL is a web development, naming process and logo design. Guadalajara Jalisco México.')
@section('description', 'BOREAL is a natural gas vehicular conversion company which is looking for help the economy of the people. We create a brand from scratch, the naming process, logo design, web development and even the stationery. Call us +52 (33) 4445 4818')
@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">BOREAL</h1>
				<h2 class="white">Branding Project</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					BOREAL is a natural gas vehicular conversion company which is looking for help the people's economy, offering a cheaper way to consume fuel in their vehicles and even avoid the planet polution. <br><br>
					To create a brand from scrat is always a big responsability, that's why we thanks to GRUPO BOUGO for let us get creative into the naming process, logo design, web development and even the stationery.
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="/images/boreal-branding-01.jpg" alt="branding project BOREAL 01"></figure>
				<figure><img src="/images/boreal-branding-03.jpg" alt="branding project BOREAL 03"></figure>
				<figure><img src="/images/boreal-branding-04.jpg" alt="branding project BOREAL 04"></figure>
				<figure><img src="/images/boreal-branding-07.jpg" alt="branding project BOREAL 07"></figure>
				<figure><img src="/images/boreal-branding-08.jpg" alt="branding project BOREAL 08"></figure>
			</div>

			@include('partials.btn-see-behance')

		</div>
	</div>
@stop