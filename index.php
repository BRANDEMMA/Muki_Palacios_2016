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
		<div class="derecha-contenido">
			<div id="contenedor-slider">
				<div id="slider">
					<section>
						<img src="img/slider.jpg" alt="">
					</section>
					<section>
						<img src="img/slider2.jpg" alt="">
					</section>
					<section>
						<img src="img/slider3.jpg" alt="">
					</section>
				</div>
				<div id="btn-avanzar">
					<img src="img/flecha-derecha.png">
				</div>
				<div id="btn-retroceder">
					<img src="img/flecha-izquierda.png">
				</div>
				<script src="js/slider.js"></script>
			</div>
			<div class="servicios reinventa-mujer">
				<a class="enlace-logo-rm" href=""><img src="img/reinventa-mujer.jpg"></a>
				<a class="enlace-foto1" href=""><img src="img/foto1.jpg"></a>
				<a class="enlace-foto2" href=""><img src="img/rm2-p.jpg"></a>
				<a class="enlace-foto3" href=""><img src="img/foto3.jpg"></a>
			</div>
			<div class="servicios felicidad-trabajo">
				<a class="enlace-logo-ft" href=""><img src="img/felicidad-en-el-trabajo.jpg"></a>
				<a class="enlace-foto1" href=""><img src="img/f1.jpg"></a>
				<a class="enlace-foto2" href=""><img src="img/f2.jpg"></a>
				<a class="enlace-foto3" href=""><img src="img/f3.jpg"></a>
			</div>
			<div class="servicios camina">
				<a class="enlace-logo-cm" href=""><img src="img/camina.jpg"></a>
				<a class="enlace-foto1" href=""><img src="img/c1.jpg"></a>
				<a class="enlace-foto2" href=""><img src="img/c2.jpg"></a>
				<a class="enlace-foto3" href=""><img src="img/c3.jpg"></a>
			</div>
			<div class="servicios familias-felices">
				<a class="enlace-logo-ff" href=""><img src="img/familias-felices.jpg"></a>
				<a class="enlace-foto1" href=""><img src="img/foto1.jpg"></a>
				<a class="enlace-foto2" href=""><img src="img/foto2.jpg"></a>
				<a class="enlace-foto3" href=""><img src="img/foto3.jpg"></a>
			</div>
			<div class="clear"></div>
			<div class="contenedor-video">
				<h2>VIDEO FLORECER DONDE ESTAS PLANTADO</h2>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/tZwylgKnpq4" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="empresas-invierten">
				<h2>EMPRESAS QUE INVIERTEN EN FELICIDAD</h2>
				<div id="contenedor-slider-pequeno">
					<div id="slider-pequeno">
						<section>
							<a href="img/AFPRIMA.png" data-lightbox="example-set"><img src="img/AFPRIMA.png" alt=""></a>
							<a href="img/BBVA.png" data-lightbox="example-set"><img src="img/BBVA.png" alt=""></a>
							<a href="img/BOSCH.png" data-lightbox="example-set"><img src="img/BOSCH.png" alt=""></a>
							<a href="img/CENTRIA.png" data-lightbox="example-set"><img src="img/CENTRIA.png" alt=""></a>
							<script src="js/lightbox-plus-jquery.min.js"></script>
						</section>
						<section>
							<a href="img/DHL.png" data-lightbox="example-set"><img src="img/DHL.png" alt=""></a>
							<a href="img/FRUTAROM.png" data-lightbox="example-set"><img src="img/FRUTAROM.png" alt=""></a>
							<a href="img/IPAE.png" data-lightbox="example-set"><img src="img/IPAE.png" alt=""></a>
							<a href="img/METROPOLITANO.png" data-lightbox="example-set"><img src="img/METROPOLITANO.png" alt=""></a>
						</section>
						<section>
							<a href="img/ODEBRECHT.png" data-lightbox="example-set"><img src="img/ODEBRECHT.png" alt=""></a>
							<a href="img/OSINERGMIN.png" data-lightbox="example-set"><img src="img/OSINERGMIN.png" alt=""></a>
							<a href="img/SBS.png" data-lightbox="example-set"><img src="img/SBS.png" alt=""></a>
							<a href="img/STATKRAF.png" data-lightbox="example-set"><img src="img/STATKRAF.png" alt=""></a>
						</section>
					</div>
					<div id="btn-avanzar-pequeno">
						<img src="img/flecha-derecha.png">
					</div>
					<div id="btn-retroceder-pequeno">
						<img src="img/flecha-izquierda.png">
					</div>
					<script src="js/slider-pequeno.js"></script>
				</div>
			</div>
			<div class="contenedor-beneficios">
				<h2>¿POR QUE INVERTIR EN FELICIDAD?</h2>
				<div class="beneficio">
						<img src="img/b1.gif">
						<p>Personas con buen humor tienen objetivos más altos, rinden mejor y son más perseverantes (Fredrickson & Levenson, 1998)</p>
				</div>
				<div class="beneficio espaciado">
						<img src="img/b2.gif">
						<p>Cuando somos felices nos centramos menos en nosotros mismos, nos caen mejor los demás y deseamos compartir incluso con desconocidos (Diener, Lyubomirsky & King, 2002)</p>
				</div>
				<div class="beneficio">
					<div class="izquierda-beneficio">
						<img src="img/b3.gif">
					</div>
					<div class="derecha-beneficio">
						<p>El pensamiento optimista nos ayuda a seguir adelante, a pesar de los obstáculos y adversidades (Carver, Scheier & Segerstorm, 2010)</p>
					</div>
				</div>
				<div class="clear"></div>
				<div class="beneficio">
					<div class="izquierda-beneficio">
						<img src="img/b4.gif">
					</div>
					<div class="derecha-beneficio">
						<p>Los colaboradores que trabajan con un propósito y no únicamente por una retribución económica, trabajan un 64% más satisfechos (Consultora Imperative, New York University, 2015)</p>
					</div>
				</div>
				<div class="beneficio espaciado">
					<div class="izquierda-beneficio">
						<img src="img/b5.gif">
					</div>
					<div class="derecha-beneficio">
						<p>Expresar actos de bondad,  amabilidad y  generosidad,  es una de las maneras más poderosas de sentirte bien. (Lyumbomirsky , Boehm & Sheldon, 2012)</p>
					</div>
				</div>
				<div class="beneficio">
					<div class="izquierda-beneficio">
						<img src="img/b6.gif">
					</div>
					<div class="derecha-beneficio">
						<p>Las emociones positivas tienen consecuencias duraderas en la inteligencia, relaciones sociales y resiliencia. (Fredrickson, 2009)</p>
					</div>
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
