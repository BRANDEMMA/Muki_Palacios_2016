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
			<div class="contenido-quienes-somos">
				<div class="texto-detalle separador-texto-detalle">
					<h2>¿QUIÉNES SOMOS?</h2>
					<p>Somos un equipo de profesionales dedicados a cultivar FELICIDAD donde sea que esta necesite florecer.  Nuestra principal tarea es aplicar la ciencia para generar bienestar en las personas, familias y organizaciones.<br><br>
					Creemos con convicción en la fórmula |Personas más Felices =  Personas más Productivos| y lo mejor de todo…¡Hemos comprobado que funciona!<br><br>
					Nuestra meta será siempre su FELICIDAD. Al conseguirla, habremos cumplido nuestro objetivo. ¡Bienvenidos a nuestra página!</p>
				</div>
				<div class="texto-detalle">
					<h2>¿QUÉ HACEMOS?</h2>
					<p>Desde el año 2008 venimos trabajando desde la base de la PSICOLOGIA POSITIVA más de 50.000 personas en 10  países realizando Intervenciones de Felicidad a personas, familias y empresas nacionales y transnacionales de primer nivel trabajando con pasión para promover el bienestar a través de la  generación de Emociones Positivas, desarrollar la Apreciatividad y potenciar el uso de las Fortalezas Personales.</p>
				</div>

				<div class="clear"></div>

				<div class="vision-mision espaciado-vision">
					

					<div class="titulo-filosofia"><h2>NUESTRA MISIÓN</h2></div>

					<p>Aumentar los índices  de bienestar en las personas, familias y organizaciones para vivir en un mundo más feliz.</p>
				</div>

				<div class="vision-mision">
					

					<div class="titulo-filosofia"><h2>NUESTRA VISIÓN</h2></div>

					<p>Utilizar la ciencia para enseñar a  las personas, familias y organizaciones a CONSTRUIR SU PROPIA FELICIDAD  para que puedan llevar vidas plenas y florecer.</p>
				</div>

				<div class="clear"></div>		

				<div class="valores">
					<h2>Nuestros Valores:</h2>

					<img class="circulo-valores" src="img/nuestros-valores-muki-palacios.gif">
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
