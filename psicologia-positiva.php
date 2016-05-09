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
			<div class="contenido-psicologia-positiva">
				<h2>¿QUÉ ES LA PSICOLOGÍA POSITIVA?</h2>
				<p>Es una ciencia rigurosa que a través de pruebas estadísticas, cuestionarios validados, ejercicios producto de una investigación exhaustiva y muestras amplias y representativas tiene como objetivo, no sólo ALIVIAR EL SUFRIMIENTO HUMANO sino AUMENTAR Y CONSTRUIR EL MAYOR BIENESTAR HUMANO!!</p>

				<h3>¿Qué estudia la Psicología Positiva?</h3>
				<p><img class="img-psico" src="img/muki-iso.gif"> Se caracteriza por estudiar los aspectos más positivos del ser humano. Entre sus objetivos están el estudio de las bases psicológicas del bienestar y la felicidad, los rasgos que nos permiten superar con éxito situaciones vitales difíciles. Es un campo dedicado al mejoramiento de la calidad de vida, que brinda estudios e instrumentos bien sustentados que respaldan los cambios positivos y reales en las personas así como la aplicación de estrategias efectivas para potenciar cualidades positivas como el optimismo, gratitud, sentido del humor y la satisfacción vital o las emociones positivas en nuestras vidas.<br><br>
				Hablar de Psicología Positiva ¡¡No tiene nada que ver con el emoticon con smile, ni con dont worry be happy, ni con el famoso libro El Secreto, ni con Hakuna Matata!!<br><br>
				La Psicología Positiva nos recuerda que el ser humano tiene una gran capacidad para adaptarse y encontrar sentido a las experiencias traumáticas más terribles, capacidad que ha sido ignorada por la Psicología durante muchos años.</p>


				<h3>Orígenes</h3>
				<p><img class="img-origenes" src="img/muki-iso.gif"> La Psicología Positiva fue desarrollada por el Profesor Martin Seligman  en 1990 a raíz de que la psicología  tradicionalmente solo se había  dedicado a estudiar los aspectos negativos y patológicos del ser humano (ansiedad, estrés, depresión, etc), dejando de lado a menudo el estudio de aspectos más positivos del ser humano como, por ejemplo, la creatividad, la inteligencia emocional, el humor, la sabiduría, la felicidad, la resiliencia, etc. A raíz de esto, empiezan las investigaciones que terminan en la consolidación de una nueva corriente de la Psicología…una corriente que decidió mirar las cosas desde una nueva perspectiva, una perspectiva más optimista y como su nombre lo indica, más positiva.</p>


			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
