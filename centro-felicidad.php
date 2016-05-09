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
				<div class="centro-felicidad">
					<h2>NUESTRO CENTRO DE LA FELICIDAD</h2>
					<p>Somos el primer centro de Psicología Positiva en el Perú y nos dedicamos a brindar servicios orientados a conseguir un BIENESTAR INTEGRAL en las personas, familias y organizaciones y lo hacemos a través de conferencias, cursos, talleres, programas (Reinventa Mujer, Felicidad en el trabajo, Camina, Familias Felices) y otras actividades que promuevan la presencia de emociones positivas en la vida diaria.<br><br>
 
					Trabajamos para que cada persona que llegue a nuestro centro aprenda a reconocer  sus recursos personales,  a consolidar o definir un propósito en su vida, a desarrollar la capacidad de APRECIAR todo lo que la vida le regala, a trabajar para que sus relaciones personales sean relaciones positivas y que puedan aplicar lo anterior en su vida diaria…con su familia, en el trabajo u otros ámbitos y logren cambiar su actitud hacia el pasado,  tener esperanza con el futuro, pero sobre todo a que empiecen a disfrutar de su PRESENTE y puedan “Florecer dónde estás  plantados”.  </p>
				</div>

				<div class="img-centro-felicidad"><img src="img/centro-felicidad.jpg"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
