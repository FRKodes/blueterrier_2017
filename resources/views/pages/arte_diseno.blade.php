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
				<h1 class="block-title blue_1" style="font-size: 3.3em">EL ARTE EN EL DISEÑO</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
				<img src="/images/brian-eno.jpg" alt="Tony de blue terrier" style="width: 100%; height: auto; display: inline-block">
			</div>
		</div>
		
		<div class="row mtop-30">
			<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
				
				<p>A lo largo de mi formación académica y profesional desarrollado en el área de la comunicación visual, una serie de preguntas a las que me he enfrentado es: ¿Qué es el arte? ¿Quién puede ser considerado un artista? ¿Qué es una obra de arte? ¿Existen elementos que puedan dotar a una pieza con los atributos necesarios para considerarse arte?</p>
				<p>En mi caso, he tratado de buscar estas respuestas al comparar, por ejemplo, una pintura o grabado versus una pieza de comunicación gráfica, esto me ha servido para tener un primer acercamiento del tema y así poder ir construyendo un criterio en torno a la definición de arte. Esta comparación me parece interesante, ya que podemos considerar que tanto una pintura como una pieza de comunicación gráfica se construyen con recursos similares, como lo son, las líneas, las formas, el color, la profundidad; ambas buscan transmitir un mensaje, y a pesar de eso podemos decir que una se considera arte y la otra no.</p>
				
				<p>Gombrich en <b>Historia del arte</b> afirma que:</p>
				
				<p class="italic">"No existe, realmente, el Arte. Tan solo hay artistas. Estos eran en otros tiempos hombres que cogían tierra coloreada y dibujaban toscamente las formas de un bisonte sobre las paredes de una cueva; hoy, compran sus colores y trazan carteles para las estaciones del metro. Entre unos y otros, han hecho muchas cosas los artistas. No hay ningún mal en llamar arte a todas estas actividades, mientras tengamos en cuenta que tal palabra puede significar muchas cosas distintas, en épocas y lugares diversos, y mientras advirtamos que el Arte, escrita la palabra con A mayúscula, no existe, pues el Arte con A mayúscula tiene por esencia ser un fantasma y un ídolo. Se puede abrumar a un artista diciéndole que lo que acaba de realizar acaso sea muy bueno a su manera, sólo que no es Arte. Y se puede llenar de confusión a alguien que atesore cuadros, asegurándole que lo que le gustó en ellos no fue precisamente Arte, sino algo distinto."</p>
				
				<p>En verdad, no creo que haya ningún motivo ilícito entre los que puedan hacer que guste una escultura o un cuadro. A alguien le puede complacer un paisaje porque lo asocia a la imagen de su casa, o un retrato porque le recuerda a un amigo. No hay perjuicio en ello. Todos nosotros, cuando vemos un cuadro, nos ponemos a recordar mil cosas que influyen sobre nuestros gustos y aversiones. En tanto que esos recuerdos nos ayuden a gozar de lo que vemos, no tenemos por qué preocuparnos. Únicamente cuando un molesto recuerdo nos obsesiona, cuando instintivamente nos apartamos de una espléndida representación de un paisaje alpino porque aborrecemos el deporte de escalar, es cuando debemos sondearnos para hallar el motivo de nuestra repugnancia, que nos priva de un placer que, de otro modo, habríamos experimentado. Hay causas equivocadas de que no nos guste una obra de arte.</p>
				<p>Partiendo de esta idea podríamos decir entonces que no existe el arte sin artista, lo cual no nos ayuda del todo a esclarecer qué es el arte. Y a partir de aquí, comenzamos a ver que existen algunos elementos  como las emociones, el gusto estético, el contexto así como el valor que le puede atribuir el artista o el espectador a cada obra a considerar para aproximarnos a esta definición.</p>
				
				<p>En el libro <b>De lo espiritual en el arte</b>, Kandinsky nos dice que:</p>

				<p class="italic">"Cualquier creación artística es hija de su tiempo y, la mayoría de las veces, madre de nuestros propios sentimientos." </p>
				
				<p>Con base a esto, considero que cada expresión artística es un discurso íntimo de su autor, el cual nos habla de su entorno cultural, de sus creencias, costumbres, miedos, y gustos, así como de su sentir hacía algún fenómeno o tema en particular y es por ello que una obra de arte es el resultado de toda esta suma de variables en donde el artista expresa, comunica o expone a través de algún medio sensorial su sentir ante un fenómeno en específico.</p>
				<p>Por otro lado, creo que un artista no puede separarse del tiempo y del entorno en el que se desarrolla, es decir, el artista y su arte pertenecen a una época específica, la cual determina –de alguna forma– el pensamiento, postura o ideología y como estos permean a las sociedades.</p>
				<p>Mucho se ha dicho sobre qué es el arte, desde si imita a la naturaleza –o viceversa– hasta si tiene alguna utilidad o está libre de cualquier uso. Actualmente el arte, en su aspecto popular y masivo, parecería ser solo un objeto mercantil.</p>
				<p>La expresión artística debe su desarrollo a un mecanismo en función del cumplimiento de un sentido, de la auténtica finalidad de la creación artística: llegar a transmitir al espectador el mensaje que el artista desea. Gombrich hace referencia en este sentido a las formas de representación que utilizan los artistas, si está correctamente ejecutada la obra por concesión de la mayoría de los espectadores, o no, y si no ¿fue decisión del autor alterar la apariencia? y en caso de tratarse de un error ¿la obra pierde su valor artístico?</p>
				<p>Las obras de arte ponen de manifiesto el contexto en el que se desarrollan, es decir, un artista al producir una obra de arte trata de comunicar su propia visión del tiempo y entorno, manifestándola a través de sus creaciones, en las que propone toda una serie de ideas y valores fruto de sus saberes y forma de relacionarse con el entorno. Esto explicaría, a mi entender, la forma que propone Sherley Logan Phillips de ver el arte como filosofía visual, –la filosofía tiene su mira puesta en el ser humano, pero no en cuanto humano, sino en cuanto objeto–. Se puede decir que el arte también representa una determinada función ideológica, encabezada por artistas, los cuales transmiten su sentir hacía la sociedad, ya sea que lo manifiesten de forma tradicional o transgresora por medio de su arte.</p>
				<p>Todo esto me hace pensar, ¿será posible que lo que hoy pueda ser considerado una obra de arte ayer no lo fuera?, y de igual modo, lo que hoy no se considera una manifestación artística, ¿en el futuro puede llegar a serlo?.</p>
				<p>Respecto al ejercicio de comparación al que me refería al inicio del texto podemos decir que el quehacer de un comunicador visual no es arte. Un cartel puesto en las luminarias de un cine cumple con la función de comunicar, y aunque se vale de diversos elementos como son, los trazos, el color, las formas, la profundidad entre otros, su fin responde a otros estímulos. Las piezas de comunicación visual en su mayoría buscan persuadir, convencer. Su finalidad casi siempre es comercial o informativa. Una pintura en cambio va más allá del solo hecho de comunicar un mensaje, una obra de arte no busca convencer a nadie de nada, una obra de arte trata de entablar un diálogo por medio de algún tipo de comunicación sensorial, es aquí donde la contemplación de la pieza detona en el espectador la capacidad de evocar diferentes sentimientos y emociones.</p>
				<p>Me gustaría cerrar con el siguiente texto de Andrei Tarkovsky:</p>
				<p class="italic">"A través del arte, el ser humano se erige sobre la realidad a través de la experiencia subjetiva [...] Un descubrimiento artístico ocurre cada vez como una nueva y única imagen del mundo, un jeroglífico de verdad absoluta. Aparece como una revelación, como un deseo momentáneo y apasionado de asir intuitivamente y palpar todas las leyes del mundo –su belleza y su fealdad, su compasión y su crueldad, su infinitud y sus límites [...] A través de la imagen se sostiene una conciencia del infinito: lo eterno dentro de lo finito, lo espiritual dentro de lo material, lo ilimitado toma forma."</p>
				<p>¡Hasta Pronto Amiguitos!</p>
				<p>
					Diego Herflo <br>
					Revisó: José María Sánchez
				</p>
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



