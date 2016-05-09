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
			<div class="contenedor-taller-conferencia">
				<div class="conferencias">
				<h2>CONFERENCIAS</h2>
					<a href="img/formato-conferencia-la-pasion-de-ser-mujer.jpg" data-lightbox="example-set"><img src="img/formato-conferencia-la-pasion-de-ser-mujer.jpg"></a>
					<a href="img/conferencia-la-pasion-de-ser-mujer.jpg" data-lightbox="example-set"><img src="img/conferencia-la-pasion-de-ser-mujer.jpg"></a>
					<a href="img/conferencia-el-reto-de-ser-mujer.jpg" data-lightbox="example-set"><img src="img/conferencia-el-reto-de-ser-mujer.jpg"></a>
					<a href="img/conferencia-es-posible-ser-feliz-en-la-vida.jpg" data-lightbox="example-set"><img src="img/conferencia-es-posible-ser-feliz-en-la-vida.jpg"></a>
					<a href="img/conferencia-construyendo-organizaciones-felices.jpg" data-lightbox="example-set"><img src="img/conferencia-construyendo-organizaciones-felices.jpg"></a>
				</div>
				<div class="talleres">
					<h2>TALLERES</h2>
					<a href="img/formato-masivo-camina.jpg" data-lightbox="example-set"><img src="img/formato-masivo-camina.jpg"></a>
					<a href="img/formato-masivo-fet.jpg" data-lightbox="example-set"><img src="img/formato-masivo-fet.jpg"></a>
					<a href="img/formato-masivo-rm.jpg" data-lightbox="example-set"><img src="img/formato-masivo-rm.jpg"></a>
					<a href="img/formato-masivo-familias-felices.jpg" data-lightbox="example-set"><img src="img/formato-masivo-familias-felices.jpg"></a>
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
