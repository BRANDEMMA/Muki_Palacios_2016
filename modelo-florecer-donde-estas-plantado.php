<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>MUKI PALACIOS</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="" />

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="css/lightbox.min.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

	<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/style.css">



			<!-- jQuery Form Plugin start -->
			<script type="text/javascript" src="js/jquery.form.js"></script>
			<!-- jQuery Form Plugin end -->

			<!--======== Detalles de Servicio Cotizadora ============-->

			<script type="text/javascript">
			function mostrar(id) {
				if (id == "no seleccionado"||id=="digitalizacion"||id=="offset"||id=="gigantografias"||id=="imagencorporativa"||id=="diseñoweb") {
			        $("#dt1").hide();
			        $("#dt2").hide();
			        $("#dt3").hide();
			        $("#dt4").hide();
		    	}

		    	if (id == "copias") {
			        $("#dt1").show();
			        $("#dt2").hide();
			        $("#dt3").hide();
			        $("#dt4").hide();
		    	}

		    	if (id == "ploteos") {
			        $("#dt1").hide();
			        $("#dt2").show();
			        $("#dt3").hide();
			        $("#dt4").hide();
		    	}

		    	if (id == "copia-plano") {
			        $("#dt1").hide();
			        $("#dt2").hide();
			        $("#dt3").show();
			        $("#dt4").hide();
		    	}
		    	if (id == "impresiones") {
			        $("#dt1").hide();
			        $("#dt2").hide();
			        $("#dt3").hide();
			        $("#dt4").show();
		    	}

			}
			</script>


			<!-- jQuery Form Plugin start -->
	<!--	<script type="text/javascript" src="js/jquery.form.js"></script>
	 -->


<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-respira').on('click', function(){
				$('#texto-respira').slideDown('slow');
				$('#texto-ejercicio').hide();
				$('#texto-sueno').hide();
				$('#texto-alimento').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-ejercicio').on('click', function(){
				$('#texto-ejercicio').slideDown('slow');
				$('#texto-respira').hide();
				$('#texto-sueno').hide();
				$('#texto-alimento').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-sueno').on('click', function(){
				$('#texto-sueno').slideDown('slow');
				$('#texto-respira').hide();
				$('#texto-ejercicio').hide();
				$('#texto-alimento').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-alimento').on('click', function(){
				$('#texto-alimento').slideDown('slow');
				$('#texto-respira').hide();
				$('#texto-ejercicio').hide();
				$('#texto-sueno').hide();
			});
		});
	</script>



	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-para').on('click', function(){
				$('#texto-para').slideDown('slow');
				$('#texto-observa').hide();
				$('#texto-siente').hide();
				$('#texto-agradece').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-observa').on('click', function(){
				$('#texto-observa').slideDown('slow');
				$('#texto-para').hide();
				$('#texto-siente').hide();
				$('#texto-agradece').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-siente').on('click', function(){
				$('#texto-siente').slideDown('slow');
				$('#texto-para').hide();
				$('#texto-observa').hide();
				$('#texto-agradece').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-agradece').on('click', function(){
				$('#texto-agradece').slideDown('slow');
				$('#texto-para').hide();
				$('#texto-observa').hide();
				$('#texto-siente').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-cara-feliz').on('click', function(){
				$('#texto-cara-feliz').slideDown('slow');
				$('#texto-punche').hide();
				$('#texto-corazon').hide();
				$('#texto-arbol').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-punche').on('click', function(){
				$('#texto-punche').slideDown('slow');
				$('#texto-cara-feliz').hide();
				$('#texto-corazon').hide();
				$('#texto-arbol').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-corazon').on('click', function(){
				$('#texto-corazon').slideDown('slow');
				$('#texto-cara-feliz').hide();
				$('#texto-punche').hide();
				$('#texto-arbol').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-arbol').on('click', function(){
				$('#texto-arbol').slideDown('slow');
				$('#texto-cara-feliz').hide();
				$('#texto-punche').hide();
				$('#texto-corazon').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#numero1').on('click', function(){
				$('#texto-numero1').show();
				$('#texto-numero2').hide();
				$('#texto-numero3').hide();
				$('#texto-numero4').hide();
				$('#texto-numero5').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#numero2').on('click', function(){
				$('#texto-numero2').show();
				$('#texto-numero1').hide();
				$('#texto-numero3').hide();
				$('#texto-numero4').hide();
				$('#texto-numero5').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#numero3').on('click', function(){
				$('#texto-numero3').show();
				$('#texto-numero1').hide();
				$('#texto-numero2').hide();
				$('#texto-numero4').hide();
				$('#texto-numero5').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#numero4').on('click', function(){
				$('#texto-numero4').show();
				$('#texto-numero1').hide();
				$('#texto-numero2').hide();
				$('#texto-numero3').hide();
				$('#texto-numero5').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#numero5').on('click', function(){
				$('#texto-numero5').show();
				$('#texto-numero1').hide();
				$('#texto-numero2').hide();
				$('#texto-numero3').hide();
				$('#texto-numero4').hide();
			});
		});
	</script>


<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

</head>

<body>
	<header>
		<?php
			include 'menu.php';
		?>
	</header>

	<div class="contenido">
		<?php
			include 'contenido-izquierda.php';
		?>
		<!--================== 	SCRIPT PARA LIGHTBOX (INICIA)  =====================-->

	 	<script src="js/lightbox-plus-jquery.min.js"></script>
	 	
		<!--================== 	SCRIPT PARA LIGHTBOX (INICIA)  =====================-->
		<div class="derecha-contenido">
			<div class="contenedor-florecer">
				<h2>MODELO<br>FLORECER DONDE ESTÁS PLANTADO</h2>
				<img src="img/modelo-florecer.gif">

				<h3>Conózcalo: Escoja ser Feliz justo donde se encuentra</h3>
				<p>La experiencia acumulada de nuestro trabajo como especialistas en Psicología Positiva, tanto en empresas como personas, nos ha llevado a proponer un método que, aplicados de forma sistemática, incrementan el bienestar y la felicidad de las personas. <br><br>

				Creemos que cada persona vive circunstancias particulares que requieren de estrategias y fórmulas diferentes, por lo que no consideramos oportuno ofrecer “recetas” universales de felicidad para todos, pues creemos no existe ninguna forma mágica que haga aparecer la felicidad donde queramos.  Por el contrario, consideramos que la felicidad se va forjando y construyendo día a día; requiriendo de un trabajo y esfuerzo constante.<br><br>

				Para ello planteamos un modelo que si lo aplicamos sistemáticamente lograremos potenciar el saboreo en la vida, el ESTAR PRESENTE realmente, el prestar atención a lo ordinario para volverlo extraordinario, a través de técnicas que nos permitan focalizar la atención, ahondando en las propias fortalezas personales y la presencia de emociones positivas.<br><br>

				Este es una propuesta basada en mi experiencia de trabajo desde la  PSICOLOGIA POSITIVA en la cual esquematizo los aspectos a evaluar y a revisar permanentemente si queremos incrementar nuestro  nivel de satisfacción con la vida y saborear de las pequeñas felicidades cotidianas, para no estar agradecido solo de vez en cuando sino momento a momento y hacer del MUNDO UN LUGAR FELIZ vivido desde la GRATITUD. Se los presentamos:</p>

				<h3>1er estadio<br> RESA (respira, ejercicio, sueño, alimento)</h3>
				<p>Estamos viviendo en un mundo altamente competitivo, en el que el trajín del día a día nos gana; generando niveles de estrés dañinos que afectan nuestra salud, tanto física como mentalmente, ya que el alto nivel de exigencia nos lleva a sentirnos cansados, adoloridos y angustiados.  A pesar de estos efectos, queremos ser parte de esta competencia y tendemos a sobre-exigir  nuestro cuerpo al máximo de sus capacidades  generando de esta manera muy malos hábitos de salud en diversos aspectos que terminan por reflejarse en cómo nos sentimos.<br><br>

				Uno de los primeros aspectos afectados es nuestro sueño. Es común que nos vayamos a dormir a cualquier hora y nos despertemos al alba para ser los primeros siempre y continuar en la apresurada carrera.  Lamentablemente, limitamos las horas que tiene nuestro cuerpo para recuperarse del día intenso que ha vivido el día anterior.  Asimismo, nuestra alimentación también ha sido descuidada, preferimos comer al paso o no comer, simplemente para ganar un poco más de tiempo, sin tomar en cuenta los nutrientes básicos que necesita nuestro cuerpo y que no se los estamos dando, por cumplir otras tareas que siempre tendrán la etiqueta de “urgente”.  Por otro lado, tendemos a dedicar gran parte de nuestra energía al trabajo y no guardamos nada para hacer un poco de ejercicio, llevándonos a una vida sedentaria.  <br><br>

				Es frente a esta situación que con RESA quiero proponer un método que nos llevará a tomar conciencia de la necesidad que tenemos por implementar hábitos saludables en nuestra vida para cuidar nuestro cuerpo y nuestra salud.   Es importante darle a nuestro cuerpo este espacio para revitalizarse y recuperarse, puesto que nos ayudará a responder aún mejor a las exigencias del día a día.  Un cuerpo descansado y bien nutrido nos permitirá desplegarnos al máximo de nuestras capacidades y posibilidades, ayudándonos a alcanzar objetivos y metas.  RESA es la Base de la Felicidad, si no prestamos atención y cuidamos estos aspectos, no estaremos listos para empezar a construir nuestra auténtica felicidad. A continuación le explicamos estos aspectos básicos relacionados a la salud que deberás tomar en cuenta:</p>
				<div class="resa">
					<img onclick="ocultar_respira()" id="btn-respira" src="img/respira.gif">
					<img onclick="ocultar_ejercicio()" id="btn-ejercicio" src="img/ejercicio.gif">
					<img onclick="ocultar_sueno()" id="btn-sueno" src="img/sueno.gif">
					<img onclick="ocultar_alimento()" id="btn-alimento" src="img/alimento.gif">
				</div>

				<div id="texto-respira">
					<h3>RESPIRA:</h3>
					<p>Como ya hemos mencionado, quienes vivimos en grandes ciudades nos vemos envueltos en un ritmo de vida acelerado, en el que el estrés se transforma en nuestro fiel compañero a la hora de realizar nuestras actividades.  Un estudio encontró, que la mayoría de estas personas respira habitualmente de forma superficial, como si estuviera siempre en estado de alerta, lo que trae como consecuencia que se consuma poco oxigeno, lo cual produce alteraciones en el funcionamiento de distintos órganos, principalmente del cerebro; y esa falta de oxígeno se puede manifestar como fatiga, sueño, apatía y malhumor. Con lo anterior en nuestra vida no podremos disfrutar plenamente de nuestra vida.<br><br>
					No obstante, se ha comprobado que aprender a respirar correctamente nos puede mejorar y prolongar la vida, así como hacer sentirnos más fuertes físicamente y mejor emocionalmente. Una respiración consciente relaja de forma inmediata, produce calma y equilibrio, brinda oxígeno al cuerpo, mejora el rendimiento y la salud tanto física como mental. Como si fuera poco lo anterior, la respiración consciente nos protege del estrés y de la ansiedad; aclara la mente y esta se torna más atenta y despierta; ayuda a recuperar la armonía con la vida y el sentimiento de amor y plenitud; aumenta la creatividad y la capacidad de intuición; incrementa la capacidad para resolver problemas y mejora las relaciones interpersonales y con uno mismo (Calle, 2000).<br><br>
					Lo que se busca es que se introduzca, como mínimo, tres respiros profundos en el día, pues estos que pueden llegar a transformarlo. Nos gusta recordarnos constantemente la siguiente frase: “Si yo tuviera que reducir mis recomendaciones para un vivir sano a solo un tip seria simplemente aprender a respirar correctamente.”<br><br>

					Si practicamos diariamente respiraciones más conscientes, uniformes y profundas, podremos relajar los nervios y empezar a vivir desde una posición más calmada y tranquila.  La respiración consciente coopera en el control de todas las emociones y ayuda a enfriar las emociones negativas y a prevenir las reacciones emocionales nocivas (Calle, 2000).<br><br>

					Así que señores… ¡RESPIREN!  Pueden hacerlo donde sea y cuando sea. Inclusive cuando se encuentran escuchando una conferencia o leyendo este artículo.</p>
				</div>
				<div id="texto-ejercicio">
					<h3>EJERCICIO:</h3>
					<p>Alguna vez escuche que no hacer ejercicios es como tomar depresivos.  Me parecieron unas palabras muy fuertes, y fue ahí cuando me di cuenta de la importancia de realizar alguna actividad física por lo menos una vez al día.<br><br>

					Hacer ejercicios es una práctica muy beneficiosa en la prevención, desarrollo y rehabilitación de la salud. Estos incrementan naturalmente el bienestar general, reduce el riesgo de muerte prematura, reduce la depresión y la ansiedad, mejora el desempeño en el trabajo y actividades sociales, te ayuda a dormir mejor, entre otros varios beneficios y esto se debe a que el ejercicio físico cambia el funcionamiento de nuestro cerebro, ayudándonos a formar más conexiones en él y con esto poder articular mejor nuestros pensamientos.<br><br>

					Muchas veces se ha dicho que el deporte es como el héroe no reconocido en las intervenciones psicológicas, ya que brinda al paciente un espacio en el cual puede liberar todo tipo de tensiones y descargarse emocionalmente.  Esto se debe a que permite la liberación de neurotransmisores: noradrenalina, serotonina y dopamina muy similares a los medicamentos psiquiátricos más importantes y sin efectos secundarios. A estos se les conoce como las “Hormonas de Felicidad” y las podemos producir con una dosis de ejercicio.<br><br>

					Diversas investigaciones señalan que el realizar actividad física regularmente reduce en casi un 50% el desarrollo de enfermedades mentales.  Además, el ejercicio es un elemento fundamental para promover las emociones positivas.  Los datos de un estudio realizado en España en el 2006 por la Universidad de Granada, arrojaron que las personas que realizan regularmente ejercicio físico se perciben como más saludables, con menor estrés y presentan mejor estado de ánimo que aquellas otras que no realizan ningún tipo de ejercicio físico (Jiménez M., Martínez P., Miró E. & Sánchez A., 2007).<br><br>

					El deporte transformará la manera en que percibas e interpretas los hechos de tu día a día de manera garantizada. Te llenará de energía y alegría, al realizarlo podrás sentir notoriamente un aumento en tu vitalidad.  Queremos que ustedes compartan estas sensaciones, tal vez sean distintas, pero siempre serán positivas… así que levántense de sus camas o sus sillas, no se pongan excusas, no necesitan de un gimnasio para ejercitarse, lo único que necesitan son GANAS ¿Comenzamos hoy?</p>
				</div>
				<div id="texto-sueno">
					<h3>SUEÑO:</h3>
					<p>El sueño es esencial en nuestras vidas, una noche de descanso tiene un gran efecto en nuestra salud. El dormir es parte de la homeóstasis de los individuos, es decir, el sueño permite al cuerpo y a la mente mantener una condición de estabilidad y equilibrio. En pocas palabras, dormir es como el agua, como los alimentos, las vitaminas o el aire, es un elemento  necesario para que nuestro cuerpo se encuentre en armonía y equilibrio. Estudios demuestran que hay una relación entre problemas de sueño durante la juventud y el grado de éxito en la vida y el trabajo. Asimismo, un buen sueño está vinculado a la creatividad y la alta productividad de un trabajador. Es por ello que una persona necesita de 7 a 8 horas de sueño sano al día ¿Estamos durmiendo menos horas? Tengamos ahorita un pequeño momento para reflexionar sobre esto, recordemos que nuestro cuerpo necesita “recargar batería” día tras día.<br><br>
					Al encontrarnos bien descansados el estado de ánimo mejora, nos sentimos dispuestos a experimentar nuevas experiencias y sentimos como nuestro cuerpo responde positivamente al descanso y se llena de energía. Es necesario que nos preocupemos por dormir lo suficiente, ya que tarde o temprano el mal hábito de desvelarnos nos pasará la factura.  Sé que puede ser difícil debido a las fuertes exigencias que nos impone la sociedad; no obstante, la mejor recomendación que les puedo dar, y que probablemente la hayan escuchado muchísimas veces de sus maestros o padres, es la PLANIFICACIÓN.  Organícense con anticipación y no posterguen las cosas para después, ya que esto luego ocasiona una noche de desvelo. Dormir para sentirnos enérgicos ¡Dormir para sentirnos bien!
					</p>
				</div>
				<div id="texto-alimento">
					<h3>ALIMENTO:</h3>
					<p>Nuestro cuerpo funciona como una máquina, y es por ello que requiere de combustible para funcionar… este es el alimento.  De él nuestro cuerpo obtiene los nutrientes y las energías necesarias para realizar todas nuestras actividades diarias.  Sin embargo, son muy pocas las personas que saben balancear correctamente su alimentación.  Las exigencias de nuestro día a día nos obligan a remplazar comidas sanas por comidas chatarra con alto contenido calórico y graso, pero con muy pocos nutrientes, esto le resta energía a nuestro cuerpo en lugar de aumentarle; o peor, dejamos de comer por ganar un poco más de tiempo.  Nunca debemos de olvidar que COMEMOS PARA VIVIR, así que dejar de lado cualquiera de las tres comidas diarias no es una opción.<br><br>	
					Asimismo, está comprobado que es mejor dar prioridad a aquellos alimentos que sean más naturales, frescos, nutritivos y sanos.  Debemos ir modificando los hábitos nocivos de alimentación y aprender a priorizar las verduras, las frutas, las legumbres, los lácteos, los frutos secos, y de forma más controlada, los demás alimentos  (tampoco queremos que te prives de todo, de vez en cuando uno puede darse un gustito).  El comer saludable nos traerá beneficios a todo nivel, tanto físico como mental y emocional.<br><br>
					Hay una frase en especial sobre la nos gusta reflexionar: "Nadie puede vivir a dieta,  pero todos podemos vivir más si elegimos mejor lo que comemos." De esta manera, los invito a tomar conciencia acerca de los que consumimos y como esto repercute en nuestro cuerpo. Busquemos cambiar la palabra “dieta” por “hábito alimenticio” y eduquémonos para darle a nuestra cuerpo el alimento que necesita para mantenerse fuerte y lleno de vitalidad.</p>
				</div>

				<h3>2do estadio<br>POSA (para, observa, siente y agradece)</h3>
				<p>En la actualidad vivimos en un mundo acelerado, en el que todos competimos por llegar primero a la meta; y luego de alcanzarla no nos detenemos a gozar del triunfo, sino que emprendemos una nueva carrera.  No nos conformamos con nada, con cada ganancia viene una nueva ambición.  El plantearnos metas no tiene nada  de malo, por el contrario, muestra mucha iniciativa y determinación, el problema aparece cuando no apreciamos las cosas que vamos ganando en el camino, y no disfrutamos nada de lo que obtenemos con tanto esfuerzo.<br><br>
				Los especialistas en Psicología Positiva se han dado cuenta que a la mayoría de nosotros no se nos da tan bien reflexionar sobre los acontecimientos positivos como sí analizamos los negativos. La mayoría solemos centrarnos en los aspectos negativos de las cosas que nos rodean, en lugar de apreciar lo que tenemos estamos pensando en lo que nos falta. Pensamos demasiado en lo que sale mal y no lo suficiente en lo que nos va bien. Las personas tenemos una tendencia a dedicar más tiempo del saludable a pensar en lo malo de la vida. Esta atención a los acontecimientos negativos nos lleva a la ansiedad y a la depresión. Son pocos los momentos en los que nos permitimos detenernos y admirar lo que tenemos alrededor, dar las gracias por todas las cosas que tenemos y no apreciamos.<br><br>

				Con POSA, proponemos un método para tomar conciencia del momento presente y vivir desde la gratitud, para no estar agradecido sólo de vez en cuando sino momento a momento y  aprender así a disfrutar de aquello que nos rodea y no apreciamos por darlo por sentado.  Si cambiamos nuestra visión, si nos quitamos los lentes opacos que nublan nuestra vista y nos ponemos unos lentes de luna más cálida, podremos mirar el mundo como un lugar feliz. A continuación, detallamos un poco el estadío P.O.S.A.:</p>
				<div class="posa"> 
					<img onclick="ocultar_para()" id="btn-para" src="img/para.gif">
					<img onclick="ocultar_observa()" id="btn-observa" src="img/observa.gif">
					<img onclick="ocultar_siente()" id="btn-siente" src="img/siente.gif">
					<img onclick="ocultar_agradece()" id="btn-agradece" src="img/agradece.gif">
				</div>

				<div id="texto-para">
					<h3>PARA:</h3>
					<p>Con qué frecuencia nos damos un momento para detenernos y alejarnos de la rutina diaria. Solemos correr por la vida y no paramos. De esta manera, perdemos oportunidades. Tenemos que parar para lograr quietud. Para poder empezar a contemplar lo bello que nos trae la vida ¡Tenemos que crear señales de alto en nuestra vida!<br><br>

					Pregúntate lo siguiente y responde para ti mismo lo siguiente:<br>
					• ¿Recuerdas cuándo fue la última vez que hiciste un alto en tu vida?<br>
					• ¿Cuándo fue la última vez que te alejaste del ruido y el aturdimiento de la sociedad y comenzaste a disfrutar de las cosas sencillas que te rodean?<br>
					•  ¿Cuántas veces nos detenemos a respirar cuando nos sentimos estresados?<br>
					•  ¿Cuántas veces paramos para agradecer por lo que estamos viviendo?<br>
					No estamos acostumbrados a detenernos, a reconocer el momento. Sea este bueno o retador, estamos acostumbrados a ir corriendo, a dar las cosas por hechas y NO NOS DEJAMOS SORPRENDER. ¿Cuánto cambiaría nuestras vidas si nos detuviéramos a respirar, a vivir los momentos con toda intensidad, cuánto más gozaríamos?<br><br>  
					Hoy en día no es una sorpresa que muchas veces no nos detengamos a pensar en los regalos que nos ha dado la vida; cosas tan simples como poder abrir los ojos y ver los colores que reciben nuestros ojos o escuchar los diversos sonidos que trae el ambiente, éstos son un privilegio del que no todos pueden disfrutar, pero que todos pueden aprender.</p>
				</div>
				<div id="texto-observa">
					<h3>OBSERVA:</h3>
					<p>Abran los ojos, abran los oídos, abran el olfato, abran el tacto y abran el gusto. Abran todos sus sentidos para mirar la maravillosa riqueza que nos ha sido entregada. Se trata de disfrutar lo que nos ha sido dado, abrir nuestros corazones a las oportunidades que pasan por nuestro camino.<br><br>

					Vivimos rodeados de cosas que pasamos por alto, ya sea porque están siempre allí o porque simplemente no logran capturar nuestra atención.  Esta mala costumbre de no observar y apreciar lo que tenemos alrededor nos reduce la posibilidad de dejarnos maravillar. <br><br> 

					No dejemos pasar la oportunidad de contemplar. Si sales a caminar tómate un momento para observar los árboles, las flores, las casas, el camino…tantas cosas por ver que están más cerca de lo que tú crees. Aprendemos a desarrollar la capacidad de mirar realmente algo y encontrar en sus detalles la novedad y la belleza. Cuando verdaderamente observo,  me siento más feliz aún, porque me doy cuenta de las cosas maravillosas que tengo a mi alrededor. <br><br>

					¡Empecemos a escuchar al mundo con los ojos!</p>
				</div>
				<div id="texto-siente">
					<h3>SIENTE:</h3>
					<p>Ábrete a la experiencia de sentir, de dejarte maravillar por todo lo que nos rodea.  Cómo estas pequeñas cosas que tenemos alrededor pueden despertar en nosotros sentimientos tan gratificantes y llenarnos de alegría.  <br><br>
					La superficialidad del mundo de hoy en día ha provocado que nuestro corazones se cierren y se anestecien ante lo cotidiano, no vemos más allá de los que tenemos al frente, no nos permitimos desviar ni un instante la mirada de los objetivos que nos hemos planteado.  Y si esto sigue así, solo va a generar a una persona fría, que no es capaz disfrutar de nada, que no siente nada, y jamás estará conforme con lo que tiene.<br><br>

					Disfruta de las distintas sensaciones que pueden generar en nosotros todas las cosas, desde el viento más liviano que nos remueve el cabello, hasta las gotas de lluvia que humedecen nuestros rostros.  No les parece maravilloso todas las experiencias a las que estamos abiertas gracias simplemente a la capacidad de sentir.  Por eso, aprovecha cada instante y siente… SIENTE TODO LO QUE PUEDAS.</p>
				</div>
				<div id="texto-agradece">
					<h3>AGRADECE:</h3>
					<p>Es fascinante como una sola palabra puede tener poder tan grande que es capaz de hacer surgir las emociones positivas en un instante y llenarte de felicidad: “GRACIAS”.<br><br>

					La gratitud puede hacer que la vida sea más feliz y satisfactoria. Cuando sentimos gratitud nos beneficiamos del recuerdo agradable de un acontecimiento positivo en nuestras vidas. Además, cuando mostramos agradecimiento reforzamos nuestra relación con los demás.  <br><br>

					Si bien puede ser que estemos acostumbrados a dar las gracias, muchas veces lo hacemos tan de pasada o tan rápido que casi no tiene sentido, y pierde el poder de renovarnos el espíritu. Diferentes estudios han encontrado que la gratitud es la variable que más se correlaciona con la felicidad y con las conductas positivas que nos permiten FLORECER.  Es por ello que es una habilidad que debemos APRENDER Y DESARROLLAR. <br><br>

					Las personas que sienten y expresan más gratitud tienden a ser más felices y a estar más satisfechas con su vida.  La mejor de todo esto es que que podemos empezar vivir con gratitud el día a día y no sólo expresarlo de vez en cuando. Esto nos llevará a tener una vida con la cual estemos agradecidos. <br><br> 

					Nunca olvides: ¡Siempre hay algo bueno por lo que agradecer!</p>
				</div>

				<h3>3er estadio<br>PILARES ¿QUIÉNES SOMOS?<br>Son felices los que expresan estos 4 aspectos de la felicidad todos los días:</h3>
				<div class="contenedor-imagenes">
					<img id="btn-cara-feliz" src="img/cara-feliz-roja.gif">
					<img id="btn-punche" src="img/punche.gif">
					<img id="btn-corazon" src="img/corazon-mas.gif">
					<img id="btn-arbol" src="img/arbol.gif">
				</div>
				<div class="texto-imagenes">
					<div id="texto-cara-feliz">
						<h3>I. EMOCIONES POSITIVAS:</h3>
						<p>Las emociones son parte de nuestro día a día y convivimos con ellas constantemente.  Las experimentamos a cada momento y nos hacen sentir de diferentes maneras; no obstante hay algunas emociones que nos enriquecen más que otras y nos llevan a experimentar una vida más plena y feliz: estas son las emociones positivas. Estas emociones traen consigo sentimientos agradables que nos ayudan a valorar la situación en la que nos encontremos.<br><br>
						De acuerdo a Barbara Fredrickson, las emociones positivas funcionan de manera distinta al resto de las emociones, puesto que nos hace sentir seguros y expanden nuestras opciones de solución, ideas y nuestra manera de reaccionar ante los hechos que nos ocurren.  Asimismo, nos brindan el beneficio de disfrutar del ahora, pues nos hacen más conscientes de las riquezas que tenemos (tanto materiales como no materiales).  El desarrollar emociones positivas genera patrones de comportamiento orientados a la flexibilidad, la creatividad y la eficiencia en las diversas actividades que realizamos.  Nuestra tarea será encontrar la manera de promover la cantidad de emociones positivas en nuestros días, procurando que siempre sean proporcionalmente más abundantes que las emociones negativas.</p>
					</div>
					<div id="texto-punche">
						<h3>II. FORTALEZAS PERSONALES-FLOW:</h3>
						<p>La fuente principal de la felicidad tanto en la vida como en el trabajo proviene del uso de nuestras fortalezas, en el saber apreciar las habilidades y capacidades que tenemos y nos hacen más fuertes, en lugar de centrarse sólo en las debilidades. Perdemos valioso tiempo tratando de eliminar o aminorar nuestras debilidades, y en lugar de ello podríamos esforzarnos más en destacar nuestras fortalezas.<br><br>
						Los estudios de Martin Seligman dieron a conocer la existencia de hasta 24 fortalezas personales que todos poseemos, en cada uno de nosotros predominan unas más que otras.  Estas son las que no hacen únicos y excepcionales, diferenciándonos de los demás.  El poder conocerlas y desarrollarlas nos va a llevar a un estado de bienestar produciendo satisfacción con uno mismo. Depende de nosotros mismos empezar un proceso de autoconocimiento para poder identificarlas y empezar a potenciarlas. <br><br>
						El estar en armonía y trabajar de la mano con nuestras fortalezas, nos permite llegar a un estado de Fluidez o “Flow” en nuestras actividades.  Estaremos en el Flow cuando estemos utilizando nuestras fortalezas para llevar a cabo actividades de un nivel de dificultad que nos genere un reto y nos permita ponerlas en práctica. Éste es un estado afectivo positivo de plenitud, relativamente persistente, que se caracteriza por altos niveles de energía, activación mental, voluntad y predisposición de invertir esfuerzos y persistencia.  De esta manera, cuando nos encontramos en este estado sentimos que tenemos el control sobre nuestra vida, sobre nuestro destino; de manera que nos lleva a sentir gran satisfacción.</p>
					</div>
					<div id="texto-corazon">
						<h3>III. RELACIONES POSITIVAS:</h3>
						<p>Los humanos somos seres sociales, no podemos vivir aislados, ya que tanto para nuestra supervivencia física, como psicológica y emocional, necesitamos de los demás. La compañía y el apoyo de nuestros compañeros y amigos son el mejor antídoto contra los momentos difíciles de la vida y la forma más fiable para animarse.<br><br>
						Para crear vínculos positivos con los demás debemos aceptar las imperfecciones humanas como una realidad de la vida, la mejor relación no es aquella que une a personas perfectas, sino aquella en que cada individuo aprende a vivir con los defectos de los demás y admirar sus cualidades. No existe la armonía perfecta entre dos personas, los conflictos no sólo son inevitables, sino que además son fundamentales para conseguir un vínculo a largo plazo.<br><br>
						El Indicador # 1 del Bienestar es el tiempo que pasamos con las personas que nos importan y se preocupan por nosotros. Por ello, siempre debemos darnos ese espacio para compartir tiempo de calidad con ellos. Esto es lo más básico, lo más sencillo y lo más importante en nuestra vida.<br><br> 

						Sin embargo, en nuestra cultura actual estamos dejando muy del lado el permitirnos compartir con otros. Vivimos en una sociedad sociedad individualista, en la que en lo primero que pienso es en mí y si hay un espacio más también pienso en mí, y en el espacio que sobra también voy yo. Reflexionemos y dejemos de lado nuestro egoísmo y abrámonos a la experiencia de compartir y disfrutar de la reconfortante y placentera compañía de los que nos importan y nos rodean.<br><br>

						“Las relaciones positivas no solo nutren la vida social, sino también la vida interior.”  Para alcanzar la realización personal y la felicidad cuide e invierta tiempo en sus relaciones personales y procura que estas sean siempre relaciones positivas.</p>
					</div>
					<div id="texto-arbol">
						<h3>IV. PROPÓSITO TRASCENDENTE:</h3>
						<p>“Tener una vida con significado o sentido tiene que ver con sentirnos conectados a algo más grande que nosotros mismos.”<br><br>

						Martin Seligman nos expresa que una vida con sentido es la que pasa a formar parte de algo más elevado que nosotros, y cuanto más elevado sea ese algo, más sentido tendrá nuestra existencia. Es bueno empezar preguntándonos ¿Qué puedo ofrecer al mundo dadas mis fortalezas, mi experiencia de vida y a través de que PLATAFORMA puedo lograrlo? <br><br>

						De acuerdo al modelo PERMA que nos presenta Seligman para experimentar bienestar subjetivo/felicidad, el tener una vida con significado es un ingrediente importante. Sin embargo, hablar de propósito y sentido de vida no es lo mismo, ya que el primero está relacionado con metas y objetivos, estos pueden ser: específicos, medibles, alcanzables, realista y en un determinado tiempo; mientras que el sentido de vida, es algo más subjetivo, es la forma en cómo nosotros le damos un significado y le atribuimos una determinada importancia a esa actividad que realizamos, para nosotros puede ser muy significativa pero para otras personas puede carecer de sentido alguno: el propósito es totalmente personal.<br><br>

						Ponernos en contacto con nuestro propósito nos conecta con lo que queremos conseguir en la vida y  define nuestro aporte a la humanidad; la huella que dejaremos y por lo que seremos recordados. Al vivir con un propósito trascendente, estaremos permitiendo que afloren nuestras fortalezas y cualidades innatas que nos conectan con lo que nos gusta hacer y somos buenos haciéndolos. Al contar con uno, sentiremos la satisfacción de sentirnos útiles y de saber tenemos algo que aportar algo que va más allá de nuestra propia vida.</p>
					</div>
				</div>

				<div class="clear"></div>

				<h3>¿A QUÉ FELICIDAD NOS REFERIMOS? PLATAFORMA DESDE LA QUE TRABAJAMOS:</h3>
				<div class="contenedor-numeros">
					<div id="numero1">1</div>
					<div id="numero2">2</div>
					<div id="numero3">3</div>
					<div id="numero4">4</div>
					<div id="numero5">5</div>
				</div>
				<div id="texto-numero1">
					<p><strong>La F se contruye</strong>, no se busca ni se encuentra. Somos responsables de nuestra propia felicidad. Esta no será la consecuencia de algo que sucede ni el resultado de la buena suerte o el azar. No es algo que pueda comprarse con dinero o con poder. La felicidad requiere trabajo al igual que un musculo que busca fortalecerse. Podemos entrenarnos para ser más felices en el aquí y ahora y así empezar a disfrutar el presente. (rigor disciplina, voluntad,  esfuerzo, compromiso, persistencia) El primer paso para empezar a construirla será tomar la DECISIÓN de ser feliz. Luego, podremos empezar a tomar acción para hacerlo, pues recuerden: “No hay felicidad sin acción.” </p>
				</div>
				<div id="texto-numero2">
					<p><strong>La F es un proceso más que una búsqueda</strong>, es un camino que debemos transitar con paciencia y amor, un descubrimiento de cada día. La felicidad se encuentra en los pequeños detalles. Comencemos a ver la felicidad como algo más accesible, no como el milagro que le sucede a unos cuántos pocos bendecidos. Estamos condicionados a pensar que nuestras vidas giran alrededor de los grandes momentos.  Todos quieren vivir en la cima de la montaña, pero toda la felicidad pasa mientras escalamos. Pero los grandes momentos muchas veces nos pillan desprevenidos y por sorpresa, envueltos maravillosamente en lo que otras personas considerarían un momento sin importancia. Cambiemos nuestra perspectiva y démonos cuenta que la felicidad es un camino y no un únicamente un destino.</p>
				</div>
				<div id="texto-numero3">
					<p><strong>La F depende de nuestras interpretaciones</strong>. Los acontecimientos que ocurren en nuestra vida están ahí, no los podemos cambiar, pero lo que sí podemos cambiar es la interpretación que les damos, esta definirá como nosotros entendemos lo que nos sucede. La alegría de vivir depende directamente de cómo la mente filtra, interpreta y le da un significado a las experiencias cotidianas. Recuerda que eres tú quien decide cómo mirar lo que te sucede en tu vida: “En este mundo donde nada es verdad y nada es mentira…todo depende del color del vidrio con el que se mira”.</p>
				</div>
				<div id="texto-numero4">
					<p><strong>La F es una decisión mental</strong>. Uno tiene que decidir ser activamente feliz. Serlo no es producto de las circunstancias, ni de una predestinación,  está más bien relacionado con nuestro interior más que con lo que pasa en nuestro exterior. Decidir ser feliz depende más de nuestra armonía interna y no del control que tengamos de lo externo. </p>
				</div>
				<div id="texto-numero5">
					<p><strong>En la F nada puede ser el todo:</strong> La Felicidad no puede depender de una sola fuente, pues de esa manera nuestra F dependería de una sola variable, y si esa variable sale de la ecuación de nuestras vidas… perderíamos el bienestar. Asegurémonos de desempeñar todos nuestros roles evitando y procurar que estos sean fuentes de bienestar evitando centrar nuestra atención en sólo una. Demos lo mejor de nosotros mismos en nuestros roles de amigos, hijos, hermanos, padres, deportistas, trabajadores, colegas, etc. y encontraremos diversas fuentes que nos suministrarán bienestar.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
