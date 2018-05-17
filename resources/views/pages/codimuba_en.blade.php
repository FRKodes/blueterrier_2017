@extends('layout_eng')
@section('title', 'Web Development Project for CODMIUBA, Wholesale furniture distributor leader in Mexico. Design and web development in Guadalajara Jalisco México.')
@section('description', 'For the web Development CODMIUBA project, we build a responsive website, which has a manageable multi level catalog where the client can manage product lines, collections, categories and products by itself in an easy and intuitive way using Wordpress as content manager.')
@section('content')
	<div class="container-fluid back-blue_1 m-b-40 p-b-20">
		<div class="row">
			<div class="container text-center">
				<h1 class="titillium blue_2">CODIMUBA</h1>
				<h2 class="white">Web Development Project</h2>
			</div>
		</div>
	</div>

	<div class="container project-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
				<p class="m-t-40 m-b-40 col-sm-8 col-sm-offset-2">
					<a target="_blank" title="Visitar el sitio web de CODIMUBA" href="http://www.codimuba.com">CODIMUBA</a>, Wholesale furniture distributor leader in Mexico, is a family business with 10+ years of experience. The challenge was to show the products they distribute in a web platform as an online catalog which works as reference for their email campaigns and social networks. <br><br>
					In order to get the most context possible, we made some interviews and benchmarking of the segment to get first hand data about the development needs. <br><br>
					Based on this data, we build a responsive website for CODIMUBA, which has a manageable multi level catalog where the client can manage product lines, collections, categories and products by itself in an easy and intuitive way using Wordpress as content manager. <br><br>

					Link: <br>
					<a target="_blank" title="Visitar el sitio web de CODIMUBA" href="http://www.codimuba.com">www.codimuba.com</a>
				</p>
			</div>

			<div class="images-container col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<figure><img src="/images/00-codimuba-behance-header.png" alt="codimuba behance header"></figure>
				<figure><img src="/images/01-codimuba-behance-wireframes.png" alt="codimuba behance wireframes"></figure>
				<figure><img src="/images/02-codimuba-behance-desktop-view.png" alt="02-codimuba behance desktop view"></figure>
				<figure><img src="/images/03-codimuba-behance-desktop.png" alt="codimuba behance desktop"></figure>
				<figure><img src="/images/04-codimuba-behance-fonts.png" alt="codimuba behance fonts"></figure>
				<figure><img src="/images/05-codimuba-behance-color.png" alt="codimuba behance color"></figure>
				<figure><img src="/images/06-codimuba-behance-mobile-devices.png" alt="codimuba behance mobile devices"></figure>
				<figure><img src="/images/07-codimuba-behance-detail.png" alt="codimuba behance detail"></figure>
				<figure><img src="/images/08-codimuba-behance-footer.png" alt="codimuba behance footer"></figure>
			</div>

			@include('partials.btn-see-behance')

		</div>
	</div>
@stop