@extends('layout_eng')
@section('title', 'MARSALA is an E-commerce web development with premise "less is more" in it\'s design.')
@section('description', 'MARSALA premium leather traveler products company, we are proud we built this E-commerce website opening a whole new channel to sell their products.')
@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">MARSALA</h1>
				<h2 class="white">E-commerce Web Development Proyect</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					The MARSALA needs were clear, a website where the could show their products and people could buy it with a minimalist and sofisticated design that made match with the brand. <br><br>
					The premise was always "less is more", our team developed a manageable E-commerce website that fits with the MARSALA needs, contemplating an intuitive user experience (UX) and a user interface (UI) clean and easy to use. <br><br>
					Link: <br>
					<a href="https://www.marsalamarsala.com/" target="_blank" title="Check MARSALA's e-commerce">www.marsalamarsala.com</a>
				</p>
				
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="/images/marsala-web-01.jpg" alt="proyecto MARSALA web 01"></figure>
				<figure><img src="/images/marsala-web-03.jpg" alt="proyecto MARSALA web 03"></figure>
				<figure><img src="/images/marsala-web-04.jpg" alt="proyecto MARSALA web 05"></figure>
				<figure><img src="/images/marsala-web-06.jpg" alt="proyecto MARSALA web 06"></figure>
				<figure><img src="/images/marsala-web-08.jpg" alt="proyecto MARSALA web 08"></figure>
				<figure><img src="/images/marsala-web-09.jpg" alt="proyecto MARSALA web 09"></figure>
			</div>

			@include('partials.btn-see-behance')

		</div>
	</div>
@stop