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
			<div class="contenedor-muki-palacios">
				<div class="muki-palacios">
					<h2>¿QUIÉN ES MUKI?</h2>
					<p>Nuestra organización es liderada por María del Carmen Palacios: Psicóloga, exitosa empresaria en el rubro de Recursos Humanos, conferencista internacional, autora de diversos artículos en distintas revistas nacionales e internacionales, docente universitaria,  así como también una de las pioneras y principales difusoras de la Psicología Positiva en el Perú, es decir, especialista en la ciencia  que estudia el bienestar y la FELICIDAD.</p>
					<img src="img/foto2.jpg">
				</div>

				<div class="linea-colores"><img src="img/linea-colores.jpg"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
