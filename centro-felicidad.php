<!DOCTYPE HTML>
<html lang="es">

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
		<!--================== 	SCRIPT PARA LIGHTBOX (INICIA)  =====================-->

	 	<script src="js/lightbox-plus-jquery.min.js"></script>
	 	
		<!--================== 	SCRIPT PARA LIGHTBOX (INICIA)  =====================-->
	</header>

	<div class="contenido">
		<?php
			include 'contenido-izquierda.php';
		?>
		<div class="derecha-contenido">
			<div class="contenedor-centro-felicidad">
				<h2 id="psicologia-positiva" class="azul">PSICOLOGÍA POSITIVA APLICADA</h2>

				<h3 class="azul">PROGRAMAS</h3>
				<div class="programa-reinventa-mujer">
					<img class="logo-rm" src="img/reinventa-mujer-logo.png">
					<div class="clear"></div>
					<div class="descripcion-izquierda">
						<h2 class="verde-oscuro">Convirtiendo las crisis en oportunidades para sacar lo mejor versión de ti misma y desarrollar más Apreciatividad</h2>

						<p>
						Programa  que sirve como un espacio de reflexión y aprendizaje que promueve, el autoconocimiento, producto del fortalecimiento y transformación personal, al ofrecer una mirada distinta acerca de la potencialidad del ser humano para hacerle frente a los desafíos y quiebres, al apreciar y gozar la vida con más entusiasmo, pasión y coraje.<br><br>

						<strong>¿Para quién?</strong><br><br>

						Para MUJERES que quieran:<br>
						•  Quieran encarar y apreciar la vida con mayor alegría y entusiasmo.<br>
						• Quieran vivir más intensamente en el presente.<br>
						• Quieran mejorar su actitud hacia el pasado.<br>
						• Quieran ser artífices en diseñar un futuro atractivo.<br>
						• Agudizar y focalizar su atención en identificar los recursos y posibilidades que encuentren en la vida.<br>
						•  Iniciar un proceso de autoexploración y autodescubrimiento para identificar toda su potencialidad y poder expresarlas en el día a día.<br>
						• Quieran acercarse a una MAESTRÍA en el VIVIR.<br><br>

						<strong>¿Qué trabajaremos?</strong><br><br>
						• Modelo “Florecer donde estás plantado” <br>
						• R.E.S.A. -La Base de la Felicidad<br>
						• P.O.S.A. – Desarrollando la apreciatividad en nuestra familia <br>
						• Las Fortalezas Personales<br>
						• Emociones Positivas <br>
						• Relaciones Positivas<br>
						• Propósito Trascendente<br><br>

						<strong>Frutos</strong><br><br>
						• Potenciación del optimismo y el sentido del humor <br>
						• Cambio de perspectiva con respecto a las dificultades de la vida: Percepción de crisis como oportunidades de crecimiento personal <br>
						• Mejora en las Habilidades Comunicativas <br>
						• Autoconocimiento que permitirá identificar y utilizar las fortalezas personales <br><br>

						<strong>N° de sesiones:</strong> 10</p>

						<a class="boton-reinventa-mujer" href=""><img src="img/flor-rm.png"><p>REINVÉNTATE</p></a>
					</div>

					<div class="descripcion-derecha">
						<a href=""><img src="img/reinventa-mujer-1.jpg"></a>
						<a href=""><img src="img/reinventa-mujer-2.jpg"></a>
						<a href=""><img src="img/reinventa-mujer-3.jpg"></a>
					</div>

					<div class="clear"></div>
				</div>

				<div class="familias">
					<img class="logo-familias" src="img/familias-felices.png">
					<div class="clear"></div>
					<div class="descripcion-izquierda">
						<h2 class="azul">Desarrollando Familias FELICES conseguiremos  personas PRODUCTIVAS</h2>

						<p>
						Programa cuyo objetivo es el de promover la presencia de emociones y acciones positivas en las familias, y así generar un impacto. Se trabajarán temas cruciales como la incorporación de rituales de bienestar en el hogar que tendrán como fruto inevitable una familia más feliz y un colaborador más satisfecho y entusiasta<br><br>

						<strong>¿Para quién?</strong><br><br>
						Organizaciones que quieran fomentar el bienestar integral de todos sus ejecutivos y colaboradores. <br><br>

						<strong>¿Qué trabajaremos?</strong><br><br>
						• Modelo “Florecer donde estás plantado” para familias<br>
						• R.E.S.A. -La Base de la Felicidad<br>
						• P.O.S.A. – Desarrollando la apreciatividad en nuestra familia <br>
						• Las Fortalezas Personales<br>
						• Emociones Positivas en el hogar<br>
						• Relaciones Positivas: Familias Unidas<br>
						• Propósito Trascendente: Una mirada común<br><br>


						<strong>Frutos</strong><br><br>
						•	Potenciación de la expresión de emociones positivas en el ámbito familiar que dará como resultado colaboradores más alegres que serán generadores de climas laborales positivos que se verán reflejadas en:<br>
						-	Reducción del stress <br>
						-	Desarrollo de hábitos para crear un ambiente positivo<br>
						-	Incremento en la apreciatividad: Desarrollo de la capacidad para asombrarse realizando actividades en familia que se habían estado realizando de manera mecánica<br><br>

						<strong>N° de sesiones:</strong> 8
						</p>

						<a class="boton-familias" href=""><p><strong>COMIENZA AHORA</strong></p></a>
					</div>

					<div class="descripcion-derecha">
						<a href=""><img src="img/fet-1.jpg"></a>
						<a href=""><img src="img/fet-2.jpg"></a>
						<a href=""><img src="img/fet-3.jpg"></a>
						<a href=""><img src="img/fet-4.jpg"></a>
					</div>

					<div class="clear"></div>
				</div>

				<img class="img-centro-florecer" src="img/slider2.jpg">


				<h3 class="espaciado-conferencias azul">CONFERENCIAS</h3>
				<div class="contenedor-taller-conferencia">
				<div class="conferencias">
						<a href="img/formato-conferencia-la-pasion-de-ser-mujer.jpg" data-lightbox="example-set"><img class="talleres" src="img/formato-conferencia-la-pasion-de-ser-mujer.jpg"></a>
						<a href="img/conferencia-la-pasion-de-ser-mujer.jpg" data-lightbox="example-set"><img class="talleres" src="img/conferencia-la-pasion-de-ser-mujer.jpg"></a>
						<a href="img/conferencia-el-reto-de-ser-mujer.jpg" data-lightbox="example-set"><img class="talleres" src="img/conferencia-el-reto-de-ser-mujer.jpg"></a>
						<a href="img/conferencia-es-posible-ser-feliz-en-la-vida.jpg" data-lightbox="example-set"><img class="talleres" src="img/conferencia-es-posible-ser-feliz-en-la-vida.jpg"></a>
						<a href="img/conferencia-construyendo-organizaciones-felices.jpg" data-lightbox="example-set"><img class="talleres" src="img/conferencia-construyendo-organizaciones-felices.jpg"></a>
					</div>
				</div>

				<h3 class="espaciado-fulldays azul">FULL DAYS</h3>
				<div class="servicio-camina">
					<img class="logo-camina" src="img/camina-sin-fondo.png">
					<div class="clear"></div>
					<div class="descripcion-izquierda">
						<h2 class="verde">Una pausa en el camino para maravillarte, dejarte sorprender, disfrutar, despertar nuestros sentidos y vivir HOY.</h2>

						<p>
						FULL DAY EXPERIENCIAL que nos invita a potenciar el saboreo en la vida, el ESTAR PRESENTE realmente, el prestar atención a lo ordinario para volverlo extraordinario, a través de técnicas que nos permitan focalizar la atención aplicando técnicas de la Psicología Positiva en diversos escenarios al aire libre.<br><br>

						<strong>Para quién:</strong><br><br>
						Personas que busquen desarrollar la  capacidad de disfrutar y apreciar lo cotidiano aprendiendo a convertir lo ordinario en extra-ordinario.Así como también empresas que busquen conseguir equipos de trabajo más cohesionados, con mayor apeciatividad y con una mayor consciencia de sus fortalezas principales. <br><br>

						<strong>¿Qué trabajaremos?</strong><br><br>
						• Desarrollo de una Cultura Apreciativa<br>
						• Atención Plena: Aprender a apreciar lo ordinario <br>
						• Potenciando a Expresión de Emociones Positivas<br><br>

						<strong>Frutos</strong><br><br>
						•   Concientización de la importancia de contar con apreciatividad en el día a día. <br>
						•	Incorporación de herramientas de disfrute y saboreo, dejándose sorprender por lo cotidiano al prestar atención con los 5 sentidos.<br>
						•	Autoconocimiento experiencial.</p>

						<a class="boton-camina" href=""><p><strong>VIVE LA EXPERIENCIA</strong></p></a>
					</div>

					<div class="descripcion-derecha">
						<a href=""><img src="img/camina-1.jpg"></a>
						<a href=""><img src="img/camina-2.jpg"></a>
						<a href=""><img src="img/camina-3.jpg"></a>
						<a href=""><img src="img/camina-4.jpg"></a>
					</div>

					<div class="clear"></div>
				</div>

				<h2 id="clases" class="espaciado-clases azul">CLASES</h2>
				<img class="img-centro-florecer" src="img/slider3.jpg">

				
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
