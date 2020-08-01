@extends('layout')

@section('content')
	<style>
		.mtop-60{
			margin-top: 60px
		}
		.italic{
			font-style: italic;
			font-weight: 100;
			line-height: 1.6em;
			padding: 0 20px;
		}
		b{
			font-weight: 700;
			color: #59C3EB;
		}
		.mtop-30{
			margin-top: 30px
		}

		@media screen and (min-width: 768px){
			
			.mtop-80-desktop{
				margin-top: 80px;
			}
			.mtop-60-desktop{
				margin-top: 60px;
			}
		}
	</style>
	
	<div class="container mtop-60-desktop">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<h1 class="block-title blue_1" style="font-size: 3.3em">EL COSTO DE LA PROCRASTINACIÓN</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
				<img src="/images/dejar-todo-para-despues.png" alt="dejar todo para despues" style="width: 100%; height: auto; display: inline-block">
			</div>
		</div>
		
		<div class="row mtop-30">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
				<p>Procrastinación se define como: Problemas para convencerse de hacer las cosas que debes hacer o te gustaría hacer.</p>
				<p><b>Traducción: El arte de mantenerte ocupado en todo menos en lo que debes hacer dejando para después lo importante.</b></p>
				<p>Si no estás seguro si te ha pasado, puedes pensar en la última vez que pasaste toda la tarde organizando el cajón de tus calcetines a pesar de que tenías una tarea para entregar al día siguiente y terminaste haciéndola con prisas en el último momento.</p>
			</div>
		</div>


		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center m-t-40">
				<img src="/images/diagrama-de-la-procrastinacion.png" alt="diagrama de la procrastinacion" style="width: 100%; height: auto; display: inline-block">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-2 m-t-40">
				<p>Todos somos un poco procrastinadores. Y como ejemplo, yo misma terminé de escribir este artículo en el último momento. Tal vez tu nivel de procrastinación no sea tan alto, tal vez eres una persona sumamente organizada y eficiente, pero si eres un maestro procrastinador entenderás la carga que es lidiar con eso en tu día a día. Quizá te has visto en esa situación donde tienes tareas por hacer, trabajo, cosas importantes que necesitan ser realizadas, pero que justo antes de comenzar a hacerlas te ves a ti mismo envuelto en una espiral de labores triviales que ocupan todo tu día y al final terminas haciendo todo lo importante en el último momento. </p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
				<img src="/images/tareas-tiempo-solucion.png" alt="diagrama tareas tiempo solucion" style="width: 100%; height: auto; display: inline-block">
			</div>
		</div>

		<div class="row mtop-30">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
				<p>Es una buena idea comenzar a usar la palabra procrastinación en lugar de usar: pereza o posponer las cosas, ya que al utilizarla, proporciona una descripción mucho más precisa de la situación. Solo dando el nombre correcto al problema puedes comenzar a trabajar en él.</p>
				<p>No confundas procrastinar con flojera, los procrastinadores posponen las cosas, los dejan hasta el último momento, a veces incluso pasan el tiempo mirando la pared, sin embargo, no es por pereza. La gente perezosa, simplemente no hace nada y está bien con eso. Los procrastinadores, por otro lado, tienen el deseo de hacer las cosas, pero no pueden obligarse a comenzar.</p>
				<p>Tampoco es relajación. Relajarse te recarga de energía. En marcado contraste, la procrastinación te la quita. Cuanta menos energía tengas, más estresado o incluso deprimido podrías volverte y mayores serán las posibilidades de que pospongas tus responsabilidades. Es así, que lo opuesto a la procrastinación es hacer las cosas y poder relajarse, lidiar bien con su carga de trabajo y ser feliz a largo plazo.</p>
				<p>El "disfrute" vivido al procrastinar, no es disfrute en sí, pues siempre está rodeado de una horrible sensación de culpa pues, en tu interior, sabes que lo que estás haciendo está mal.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center m-t-40">
				<img src="/images/que-es-procrastinacion.jpg" alt="que es la procrastinacion" style="width: 100%; height: auto; display: inline-block">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-2 m-t-40">
				<p>La procrastinación se "controla" con las fechas límite (o deadlines) en base a las cuales nosotros regulamos cuando finalizar la tarea. Si un procrastinador debe, por ejemplo, entregar un proyecto el viernes; el lunes y martes probablemente no trabajará nada, el miércoles tal vez un poco y el jueves se desvelará terminándolo.</p>
				<p>Existe el mito (y yo también lo creía) de que se trabaja mejor bajo presión, esto es mentira. Se podría pensar que es cierto, pues en ocasiones logramos llevar a cabo todo el trabajo en menos tiempo del planeado, pero no nos damos cuenta que muchas veces el "trabajo" queda realizado al 30% de su potencial y el estrés que conlleva hacerlo de esta forma nos carcome.</p>
				<p>El gran problema con la procrastinación, además de los sentimientos de culpa, falsa relajación, estrés y baja eficiencia, es cuando no es controlada con fechas límite. Cuando tenemos una tarea con fecha de entrega, tenemos margen para procrastinar y aún así, llevarla a cabo. El problema de no tener una fecha límite es que usualmente son actividades que decides hacer por tu cuenta o para mejorar tu vida, como: comenzar a ejercitarte, comenzar nuevos hábitos, viajar más seguido, visitar a alguien, aprender una nueva habilidad, innovar, etc. Y al no tener una deadline <b>lo que terminas procrastinando es tu vida</b>.</p>
				<p>Una solución a este gran padecimiento puede ser crear un sistema de recompensas para auto-disciplinarte, por ejemplo:</p>
				<ul>
					<li>Escuchar audiolibros o podcasts que te gusten mientras haces ejercicio.</li>
					<li>Hacerte la pedicura mientras checas tus correos de trabajo atrasados.</li>
					<li>Ver tu serie favorita mientras planchas o haces quehacer.</li>
					<li>Comer en tu restaurante favorito cuando tengas una junta con un colega difícil.</li>
				</ul>
				<p>O un sistema de consecuencias, por ejemplo si haces ejercicio solo, omitir tu entrenamiento la próxima semana no afectará tu vida en absoluto. El costo de postergar el ejercicio solo se vuelve doloroso después de semanas y meses. Sin embargo, si te comprometes a hacer ejercicio con un amigo a las 7 am del próximo lunes, el costo de omitir tu entrenamiento se vuelve más inmediato. Si faltas a ese entrenamiento quedarás muy mal. </p>
				<p>Lo importante es que comiences a diseñar tu futuro y planear tu vida de tal forma que puedas lograr todas tus metas. Alcanzar tus sueños y lograr tu proyecto de vida se basa en perseverancia, trabajo duro y por supuesto, <b>planificación</b>. Busca un sueño, traducelo a metas, conviértelo en pequeños retos <p>¡y ponles fecha!</p> </p>
				<p><b class="italic">Comienza a vivir hoy, no mañana.</b></p>
				<p>Para aprender más sobre qué pasa dentro de la mente de un procrastinador, chécate la Ted Talk: Inside the mind of a master procrastinator de Tim Urban en: </p>	
			</div>
		</div>

		
		<div class="row">
			<div class="col-xs-12 col-md-10 col-lg-6 col-md-offset-2 col-lg-offset-3 m-t-40">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/arj7oStGLkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-2" style="margin-top: 40px">
				<p>Autor: Michelle Díaz</p>
			</div>
		</div>
		
	</div>
	

	<div class="container-fluid services-begins" id="servicios" style="margin-top: 0">
		<div class="row">
			<div class="container m-t-60">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="block-title"><span class="blue_1">¿QUIÉNES</span> <span class="blue_2">SOMOS?</span></h2>
					<p class="text-left">
						Somos un estudio que desarrolla proyectos a la medida con un equipo multidisciplinario. Ayudamos a nuestros clientes a alcanzar sus objetivos a través de productos digitales (<strong>Branding</strong>, <strong>Diseño y Desarrollo Web</strong>, <strong>Marketing Digital</strong>) que les permiten tener voz y una fuerte identidad frente al mercado y su competencia en el ámbito digital.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid la-chamba" id="chamba">
		<div class="row">
			<div class="container p-b-60">
				<h2 class="titillium text-center m-t-80"><span class="blue_1">ALGO DE </span> <span class="blue_2">NUESTRA CHAMBA</span></h2>
			</div>
		</div>
	</div>

	<div class="container-fluid clients back_gray_1">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto Artesanías VELY" href="{{ url('proyecto-branding-artesanias-vely') }}"><img src="images/portadaproyecto-vely.jpg" alt="Proyecto Branding Artesanías VELY"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto Mini Miney Moe" href="{{ url('proyecto-social-media-mini-miney-moe') }}"><img src="images/proyecto-social-media-mini-miney-moe.png" alt="Proyecto Social Media Mini Miney Moe"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto PISTONES GARAGE" href="{{ url('proyecto-desarrollo-web-pistones') }}"><img src="images/proyecto-integral-pistones.jpg" alt="proyecto integral pistones"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto LOS CAMACHOS" href="{{ url('proyecto-desarrollo-web-parque-los-camachos') }}"><img src="images/proyecto-desarrollo-web-los-camachos.png" alt="proyecto desarrollo web parque acuático los camachos"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto MARSALA" href="{{ url('proyecto-desarrollo-web-marsala') }}"><img src="images/proyecto-desarrollo-e-commerce-marsala.jpg" alt="proyecto desarrollo e-commerce marsala"></a></div>					
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto BOREAL" href="{{ url('proyecto-branding-boreal') }}"><img src="images/proyecto-desarrollo-web-boreal.jpg" alt="proyecto desarrollo web boreal"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto WOOD &amp; STONE" href="{{ url('proyecto-desarrollo-web-wood-and-stone') }}"><img src="images/wood-and-stone-blue-terrier-studio.jpg" alt="proyecto desarollo web "></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto TRANSPADEX" href="{{ url('proyecto-desarrollo-web-transpadex') }}"><img src="images/proyecto-desarrollo-web-transpadex.jpg" alt="proyecto desarrollo web transpadex"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto BOREAL" href="{{ url('proyecto-branding-selcon') }}"><img src="images/proyecto-branding-selcon.jpg" alt="proyecto branding SELCON"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto LE GARRAF" href="{{ url('proyecto-desarrollo-web-le-garraf') }}"><img src="images/proyecto-desarrollo-web-le-garraf.jpg" alt="proyecto desarrollo web le garraf"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto GYB Maquinaria pesada" href="{{ url('proyecto-desarrollo-web-gyb') }}"><img src="images/proyecto-desarrollo-web-gyb.jpg" alt="proyecto desarrollo web GYB Maquinaria pesada"></a></div>
					<div class="col-xs-12 col-sm-4 project-item"><a title="Ver proyecto CODIMUBA" href="{{ url('proyecto-desarrollo-web-codimuba') }}"><img src="images/proyecto-desarrollo-web-codimuba.jpg" alt="proyecto desarrollo web CODIMUBA"></a></div>
				</div>
				<div class="col-xs-12 m-t-40 m-b-40 text-center">
					<p>Ingresa a nuestro perfil de behance para ver más de nuestro trabajo.</p>
					<a class="icon-behance-logo" href="https://www.behance.net/blueterrierstudio" target="_blank" title="Ver portafolio completo en BEHANCE"></a>
				</div>
			</div>
		</div>
	</div>
@stop



