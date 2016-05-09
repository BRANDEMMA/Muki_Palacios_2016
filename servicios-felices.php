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
			<div class="contenedor-servicios-felices">
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

				<div class="reinventa-pinta">
					<img class="logo-rp" src="img/reinventapinta.png">
					<div class="clear"></div>
					<div class="descripcion-izquierda letra-blanca">
						<h2 class="rosado">Conociéndonos a través del ARTE. Creer para CREAR.</h2>

						<p>
						Un programa que te invita a tener una experiencia diferente e innovadora  basada en la Psicología Positiva en la cual a a través del arte de la pintura se  hace una parada en nuestros días e inspirarnos CREER y CREAR.<br><br>

						<strong>¿Para quién?</strong><br><br>
						Personas que están buscando desarrollar la creatividad, la capacidad expresiva y fortalecer la autoestima dentro de un espacio que les permita generar un producto auténtico.<br><br>

						<strong>¿Qué trabajaremos?</strong><br><br>
						De la mano con un artista experto en gestionar clases de pintura grupales, trabajaremos en la creación de una obra de arte individual en espacios que propicien la creatividad utilizando la Psicología Positiva para estimular la expresión de emociones y facilitar el desarrollo de la sensibilidad en los participantes.<br><br>

						<strong>Frutos</strong><br><br>
						•	Estimulación de la capacidad creativa e imaginativa <br>
						•	Aumento de la capacidad expresiva <br>
						•	Desarrollo de la sensibilidad <br><br>

						<strong>N° de sesiones:</strong> 1
						</p>

						<a class="boton-pinta" href=""><p><strong>PINTA CONMIGO</strong></p></a>
					</div>

					<div class="descripcion-derecha">
						<a href=""><img src="img/reinventa-pinta-1.jpg"></a>
						<a href=""><img src="img/reinventa-pinta-2.jpg"></a>
						<a href=""><img src="img/reinventa-pinta-3.jpg"></a>
					</div>

					<div class="clear"></div>
				</div>

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

				<div class="fet">
					<img class="logo-fet" src="img/fet.png">
					<div class="clear"></div>
					<div class="descripcion-izquierda">
						 <h2 class="rojo">Personas FELICES son colaboradores más COMPROMETIDOS</h2>

						<p>
						Programa que busca incrementar la calidad del desempeño mediante el desarrollo de actitudes y hábitos de efectividad y bienestar a través de los cuáles se buscará potenciar la expresión de emociones positivas y apreciatividad asi como el uso de sus fortalezas personales en el trabajo. Se enseñarán las estrategias necesarias para crear un entorno positivo que promueva la satisfacción en el trabajo.<br><br>

						<strong>Para quién:</strong><br><br>
						• Organizaciones que trabajen en fomentar el bienestar de sus colaboradores<br><br>

						<strong>¿Qué trabajaremos?</strong><br><br>
						• Modelo “Florecer donde estás plantado” para organizaciones<br>
						• R.E.S.A. -La Base de la Felicidad<br>
						• P.O.S.A. – Desarrollando la apreciatividad en nuestra organización<br>
						• Emociones Positivas<br>
						• Las Fortalezas Personales – Encontrando nuestro núcleo - Flow<br>
						• Relaciones Positivas: Comunicación Positiva y Coordinación<br> 
						• Propósito Trascendente: Objetivos comunes<br><br>


						<strong>Frutos:</strong><br><br>
						•   Incorporación de herramientas para crear un Entorno Positivo de Trabajo<br> 
						•   Incremento de la satisfacción laboral <br>
						•	Identificación y potencialización de Fortalezas (Competencias) <br>
						•	Aumento en la cohesión  e integración de equipos de trabajo <br><br>

						<strong>N° de Sesiones:</strong> 10
						</p>

						<a class="boton-fet" href=""><p><strong>COMIENZA AHORA</strong></p></a>
					</div>

					<div class="descripcion-derecha">
						<a href=""><img src="img/fet-1.jpg"></a>
						<a href=""><img src="img/fet-2.jpg"></a>
						<a href=""><img src="img/fet-3.jpg"></a>
						<a href=""><img src="img/fet-4.jpg"></a>
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

			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
