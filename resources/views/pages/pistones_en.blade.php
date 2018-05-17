@extends('layout_eng')
@section('title', 'PISTONES GARAGE is a web development, branding, design and social media management project. Guadalaja Jalisco México.')
@section('description', 'More than a client, PISTONES GARAGE has been a commertial partner which we were grown with, giving us the confidence to manage the brand from a digital environment until the design into each one of the seven branches around México. We had the chance to work on the website development, design and to manage it\'s social networks even some branding lifts for "El taller de los deportes".')
@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">PISTONES GARAGE</h1>
				<h2 class="white">Web Development Project</h2>
			</div>
		</div>
	</div>
	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					More than a client, PISTONES GARAGE has been a commertial partner which we were grown with, giving us the confidence to manage the brand from a digital environment until the design into each one of the seven branches around México. <br><br>
					We had the chance to work on the website development, design and manage it's social networks even some branding lifts for "El taller de los deportes". <br><br>
					Link: <br>
					<a href="http://www.pistonesgarage.com/" target="_blank" title="Ver página de PISTONES GARAGE">www.pistonesgarage.com</a>
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="/images/pistones-garage-desarrollo-web-01.png" alt="web development project PISTONES GARAGE 01"></figure>
				<figure><img src="/images/pistones-garage-desarrollo-web-02.png" alt="web development project PISTONES GARAGE 02"></figure>
				<figure><img src="/images/pistones-garage-desarrollo-web-03.png" alt="web development project PISTONES GARAGE 03"></figure>
				<figure><img src="/images/pistones-garage-desarrollo-web-04.png" alt="web development project PISTONES GARAGE 04"></figure>
				<figure><img src="/images/pistones-garage-desarrollo-web-05.png" alt="web development project PISTONES GARAGE 05"></figure>
				<figure><img src="/images/pistones-garage-desarrollo-web-06.png" alt="web development project PISTONES GARAGE 06"></figure>
				<figure><img src="/images/pistones-garage-desarrollo-web-07.png" alt="web development project PISTONES GARAGE 07"></figure>
			</div>
			
			@include('partials.btn-see-behance')
			
		</div>
	</div>
@stop