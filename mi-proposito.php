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

	<script type="text/javascript">
		$(document).ready(function(){
			$('#proposito1').on('click', function(){
				$('#texto-proposito1').show();
				$('#texto-proposito2').hide();
				$('#texto-proposito3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#proposito2').on('click', function(){
				$('#texto-proposito2').show();
				$('#texto-proposito1').hide();
				$('#texto-proposito3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#proposito3').on('click', function(){
				$('#texto-proposito3').show();
				$('#texto-proposito1').hide();
				$('#texto-proposito2').hide();
			});
		});
	</script>

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
			<div class="contenedor-proposito">
				<div class="proposito">
					<img class="pensamiento" src="img/pensamiento.png">
					<div class="contenedor-texto-proposito">
						<div id="texto-proposito1">
							<h4>MI PROPÓSITO</h4>
							<p>¡Hola!<br>
							Soy Maria del Carmen Palacios, muy pocos me conocen por mi nombre, pues los que me conocen me dicen “Muki”. Mi filosofía de vida es <strong>“FLORECER DONDE ESTÁS PLANTADO”: Escoja ser feliz justo en donde se encuentra</strong>. Llevo más de  15 años dedicándome a compartir mi filosofía y plasmarlo en los diversos  programas que he ido creando y  que están orientados a incrementar el bienestar en las personas, familias y organizaciones.<br><br>
	   
							Si bien me gusta mi vida, lo que hago y tengo, esto le he obtenido  esforzándome en cada momento, sobre todo en las situaciones inesperadas, y como resultado me ha llevado a tener autonomía, aceptar consultorías, desarrollar y ejecutar programas que me permitan enseñar y a la vez aprender, dictar un número de horas razonables de conferencias, sin embargo, cada vez apunto más a un balance de vida.  Me siento no sólo competente, sino feliz trabajando en mis talentos y fortalezas,  por ejemplo, cuando preparo un curso me siento bendecida porque tengo el privilegio de hacerlo todos los días, pues lo disfruto. Sin embargo, hoy en día mi fuerza inspiradora es el de la TRASCENDENCIA.</p>
						</div>
						<div id="texto-proposito2">
							<h4>MI PROPÓSITO</h4>
							<p>
							Estoy convencida de que venimos al mundo a servir, a ayudar, a hacer la diferencia en la vida de los demás. Mi trabajo, hoy, me permite hacerlo totalmente. ¿Qué puede ser más trascendente que llevar a cabo programas y dictar conferencias para no solo ser feliz en el trabajo sino en la vida?
							 Estoy agradecida con las diversas, personas, familias, y organizaciones que han puesto su confianza en los diversos programas que ofrezco: REINVENTA MUJER, FELICIDAD EN EL TRABAJO, CAMINA, REINVENTA PINTA y FAMILIAS FELICES.   <br><br>
							<strong>Gracias “REINVENTA MUJER” por existir </strong>y gracias a cada una de las mujeres que vivió conmigo este programa que marcó el inicio de mayor florecimiento en mi vida. Ha sido y es una de las etapas que más gratificaciones y satisfacciones me ha dado desde la partida de mi esposo Eduardo. Me conectó con la esperanza y la gratitud: “¡Ver en carne propia la fortaleza y vulnerabilidad de la mujer!”. Hoy puedo presentarles este programa que busca incorporar Prácticas Sostenibles de Bienestar en la Familia y en la vida. Agradezco poder compartir estos conocimientos y herramientas ya que cada vez se hace mas latente la dificultad para concentrarse en disfrutar y confiar en lo simple y cotidiano.</p>

						</div>
						<div id="texto-proposito3">
							<h4>MI PROPÓSITO</h4>
							<p>
							<strong>GRACIAS FELICIDAD EN EL TRABAJO</strong> por ser el gran reto que estoy llevando a cabo con gran pasión y entusiasmo y que me permite llevar a cabo mi<strong> PROPÓSITO: promover una visión más optimista en el trabajo y la vida</strong>. Con esto programa trabajamos para incrementar la calidad del desempeño mediante el desarrollo de actitudes y hábitos de efectividad y bienestar. Nos enfocamos en potencializar la expresión de emociones positivas así como el uso de sus fortalezas personales en el trabajo al brindar herramientas para crear un entorno positivo que promueva la satisfacción laboral.  <br><br>
							Gracias a ustedes por apreciar nuestro trabajo e interesarse en lo que hacemos todos los días con gran pasión ¡Estoy para servirles con una gran sonrisa en la cara y mucha pasión!

</p>
						</div>
						<div class="botones-proposito">
							<div id="proposito1">1</div>
							<div id="proposito2">2</div>
							<div id="proposito3">3</div>
						</div>
					</div>
					<div class="clear"></div>
					<img class="imagen-muki" src="img/muki-sin-fondo.png">
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
