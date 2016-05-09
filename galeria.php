<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>MUKI PALACIOS - Galería</title>
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
			<div class="contenedor-taller-conferencia">
				<div class="conferencias">


				<h2>VIDEOS</h2>

				<a href="https://www.youtube.com/user/mukipd/videos"><img class="videoscien" src="img/videos-muki.jpg"> </a>

				
				<h2>Imágenes</h2>

			<div class="servicios reinventa-mujer">
				<a class="enlace-logo-rm" href="http://www.mukipalacios.com/reinventa-mujer-2/" target="_blank"><img src="img/reinventa-mujer.jpg" ></a>
				<a class="enlace-foto1" href="http://www.mukipalacios.com/reinventa-mujer-2/" target="_blank"><img src="img/foto1.jpg" ></a>
				<a class="enlace-foto2" href="http://www.mukipalacios.com/reinventa-mujer-2/" target="_blank"><img src="img/rm2-p.jpg" ></a>
				<a class="enlace-foto3" href="http://www.mukipalacios.com/reinventa-mujer-2/" target="_blank"><img src="img/foto3.jpg"></a>
			</div>
			<div class="servicios felicidad-trabajo">
				<a class="enlace-logo-ft" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/felicidad-en-el-trabajo.jpg"></a>
				<a class="enlace-foto1" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/f1.jpg"></a>
				<a class="enlace-foto2" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/f2.jpg"></a>
				<a class="enlace-foto3" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/f3.jpg"></a>
			</div>
			<div class="servicios camina">
				<a class="enlace-logo-cm" href="http://www.mukipalacios.com/camina-2/" target="_blank"><img src="img/camina.jpg"></a>
				<a class="enlace-foto1" href="http://www.mukipalacios.com/camina-2/"target="_blank"><img src="img/c1.jpg"></a>
				<a class="enlace-foto2" href="http://www.mukipalacios.com/camina-2/"target="_blank"><img src="img/c2.jpg"></a>
				<a class="enlace-foto3" href="http://www.mukipalacios.com/camina-2/"target="_blank"><img src="img/c3.jpg"></a>
			</div>
			<div class="servicios familias-felices">
				<a class="enlace-logo-ff" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/familias-felices.jpg"></a>
				<a class="enlace-foto1" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/fa1.jpg"></a>
				<a class="enlace-foto2" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/fa2.jpg"></a>
				<a class="enlace-foto3" href="http://www.mukipalacios.com/felicidad-en-el-trabajo-2/" target="_blank"><img src="img/fa3.jpg"></a>
			</div>
			<div class="clear"></div>





				
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
