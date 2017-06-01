<div class="container p-t-40">
	
	<h2 class="titillium text-center m-t-60"><span class="blue_1">CHARLEMOS</span></h2>

	{{ Form::open(['id'=>'contactForm', 'class'=>'col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3']) }}
		<div class="form-group{{ $errors->has('objetivo') ? ' has-error' : '' }}">
		    {!! Form::select('objetivo', [''=>'¿Qué estás buscando?', 'Web'=>'Web', 'Branding'=>'Branding', 'MKT Digital'=>'MKT Digital' ], null, ['id' => 'objetivo', 'class' => 'form-control back-blue_1', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('objetivo') }}</small>
		</div>
		<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
		    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'¿Cuá es tu nombre?']) !!}
		    <small class="text-danger">{{ $errors->first('nombre') }}</small>
		</div>

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Escribe tu correo']) !!}
		    <small class="text-danger">{{ $errors->first('email') }}</small>
		</div>

		<div class="form-group{{ $errors->has('comentario') ? ' has-error' : '' }}">
		    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Platicanos un poco de tu proyecto']) !!}
		    <small class="text-danger">{{ $errors->first('comentario') }}</small>
		</div>

		<div class="form-group{{ $errors->has('submit') ? ' has-error' : '' }} text-center">
		    {!! Form::submit('ENVIAR', ['class' => 'titillium submit']) !!}
		    <small class="text-danger">{{ $errors->first('submit') }}</small>
		</div>
	{{ Form::close() }}

	<div class="col-xs-12 text-center white m-t-40">
		<p>
			Ottawa 1129, Col. Italia Providencia <br>
			Guadalajara, Jal. Mex. <br>
			<a class="white" href="tel: +52 3111 9004">+52 3111 9004</a>
		</p>
		<hr>
		<p>
			Playa del Carmen <br>
			Quintana Roo, Mx. <br>
			<a class="white" href="tel: +52 984 105 6131">+52 984 105 6131</a>
		</p>

		<img src="images/blue-terrier-dog.svg" alt="blue terrier dog">

		<p class="give-us-a-like"><span class="blue_1">DANOS</span> LIKE</p>

		<ul class="social">
			<li><a target="_blank" href="https://www.facebook.com/blueterrier/" class="icon-facebook"></a></li>
			<li><a target="_blank" href="https://www.instagram.com/blueterrier/" class="icon-instagram"></a></li>
			<li><a target="_blank" href="https://www.behance.net/blueterrierstudio" class="icon-behance"></a></li>
		</ul>

	</div>
</div>