<div class="container p-t-40" id="contacto">
	<div class="row">
		
		<h2 class="titillium text-center m-t-60"><span class="blue_1">LET'S CHAT!</span></h2>

		{{ Form::open(['id'=>'contactForm', 'url'=>'sendmail', 'class'=>'col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3']) }}
			<div class="form-group{{ $errors->has('objetivo') ? ' has-error' : '' }}">
			    {!! Form::select('objetivo', [''=>'What are you looking for?', 'Web'=>'Web', 'Branding'=>'Branding', 'MKT Digital'=>'MKT Digital' ], null, ['id' => 'objetivo', 'class' => 'form-control back-blue_1', 'data-validate' => 'required']) !!}
			</div>
			<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
			    {!! Form::text('nombre', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'What\'s your name?']) !!}
			</div>

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			    {!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required|email', 'placeholder'=>'Your email?']) !!}
			</div>

			<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
			    {!! Form::text('telefono', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'any phone to get in touch? *']) !!}
			</div>

			<div class="form-group{{ $errors->has('comentario') ? ' has-error' : '' }}">
			    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder'=>'Tell us a little bit about your project']) !!}
			</div>
			<div class="form-group text-danger">
				*red border fields are required.
			</div>
			<div class="form-group{{ $errors->has('submit') ? ' has-error' : '' }} text-center">
			    {!! Form::submit('LET\'S WORK TOGETHER', ['class' => 'titillium submit']) !!}
			</div>
			<div class="col-xs-12 col-sm-10 sent_mail_alert text-center">
				<p>Thanks!</p>
				<p>Your message was sent, we will get in touch soon ;)</p>
			</div>
		{{ Form::close() }}
	</div>

	<div class="col-xs-12 text-center white m-t-40">
		<p>
			MIND building 1st Floor<br>
			2350 Faro Av.<br>
			Guadalajara, Jal. Mex. <br>
			Phone: <a class="white" href="tel:+523344454818">+52 (33) 4445-4818</a>
		</p>
	</div>

	<hr class="col-xs-12 col-md-6 col-md-offset-3">

	<div class="col-xs-12 text-center white">

		<img src="/images/blue-terrier-dog.svg" alt="blue terrier dog">

		<p class="give-us-a-like"><span class="blue_1">GIVE</span> US A LIKE</p>

		<ul class="social">
			<li><a target="_blank" href="https://www.facebook.com/blueterrier/" class="icon-facebook"></a></li>
			<li><a target="_blank" href="https://www.instagram.com/blueterrier/" class="icon-instagram"></a></li>
			<li><a target="_blank" href="https://www.behance.net/blueterrierstudio" class="icon-behance"></a></li>
		</ul>

	</div>
</div>