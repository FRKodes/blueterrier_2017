@extends('layout_eng')
@section('title', 'SELCON is a branding project, designed and developed to connect with it\'s clients and target. Logo Design Guadalajara Jalisco México.')
@section('description', 'For SELCON, the logo design was the result of industry elements abstractions. The strong and legible typography get you that feeling of confidence. Call us +52 (33) 4445 4818 or by mail contacto@blueterrier.mx')
@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">SELCON</h1>
				<h2 class="white">Branding Project</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					SELCON is an electric engeenering firm which work with large corporate along México. It has more than 10 years of experience provinding electric materials and installing it in big warehouses, offices, etc. <br><br>
					Even though they have a lot time in the market, they haven't a solid corporate image that could reflect the expertise of the company, here at Blue Terrier Studio developed an iconic and solid corporate image which can be applied anywhere easily. <br><br>
					The logo design was the result of industry elements abstractions. The strong and legible typography get you that feeling of confidence.
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ">
				<figure><img src="/images/selcon-01-header-selcon.jpg" alt="header selcon"></figure>
				<figure><img src="/images/selcon-02-icon-selcon.jpg" alt="icon selcon"></figure>
				<figure><img src="/images/selcon-03-icon-typo.jpg" alt="icon typo"></figure>
				<figure><img src="/images/selcon-04-icon-color.jpg" alt="icon color"></figure>
				<figure><img src="/images/selcon-05-logo-color.jpg" alt="logo color"></figure>
				<figure><img src="/images/selcon-06-logoApp-color.jpg" alt="logoApp color"></figure>
				<figure><img src="/images/selcon-07-aplicaciones-selcon.jpg" alt="aplicaciones selcon"></figure>
				<figure><img src="/images/selcon-08-aplicaciones-selcon.jpg" alt="aplicaciones selcon"></figure>
				<figure><img src="/images/selcon-09-aplicaciones-selcon.jpg" alt="aplicaciones selcon"></figure>

			</div>

			@include('partials.btn-see-behance')

		</div>
	</div>
@stop