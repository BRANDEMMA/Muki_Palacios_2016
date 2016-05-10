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

	<!--================== 	ENLACE PARA LOS ICONOS (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!--================== 	ENLACE PARA LOS ICONOS (TERMINA)  =====================-->	

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
			<div class="fondo-conozcamonos">
				<div class="contenido-conozcamonos">
					
					<div class="contenedor-formulario">
						<h2>CONOZCÁMONOS</h2>
						<p>Déjanos tu consulta y/o requerimiento y un ejecutivo especializado te responderá a la brevedad.</p>
						<form class="form-main" name="ajax-form" id="ajax-form" action="php/contacto.php" method="POST">
							<div id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div>
							<div class="formulario-izquierda">
								<input name="nombre" id="nombre" type="text" value="Nombre" class="form-control" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='Nombre';"></br>
								<div class="error" id="err-nombre">*Por favor introduce tu nombre*</div>
																		
								<input name="empresa" id="empresa" type="text" value="Empresa" class="form-control" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='Empresa';">
								<div class="error" id="err-empresa">*Por favor introduce el nombre de tu empresa*</div>
							</div>

							<div class="formulario-derecha">
								<input name="email" id="email" type="email" value="E-mail" class="form-control" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';"></br>
								<div class="error" id="err-email">*Por favor introduce tu e-mail*</div>
			            		<div class="error" id="err-emailvld">*El formato de E-mail no es valido*</div>
													
								<input name="telefono" id="telefono" type="tel" value="Teléfono" class="form-control" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='Teléfono';">
								<div class="error" id="err-telefono">*Por favor introduce tu número teléfonico*</div>
							</div>
							<div class="clear"></div>

							<div class="formulario-completo">
								<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4  class="form-control2" onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='Mensaje';">Mensaje</textarea>
								<div class="error" id="err-mensaje">*Por favor escribe un mensaje*</div>
							</div>
							<div>
							    <div class="error" id="err-form">*Hubo un problema al validar el formulario por favor verifica!*</div>
							    <div class="error" id="err-timedout">*El tiempo de conexión con el servidor a expirado!*</div>
							    <div class="error" id="err-state"></div>
							</div>
							<div class="clear"></div>
									
							<button id="send" class="btn btn-primary">ENVIAR MENSAJE</button>
						</form>
					</div>
					<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
					<script type="text/javascript" src="js/bootstrap.min.js"></script>  
	  				<script type="text/javascript" src="js/functions.js"></script>

	  			
				
			

  				<div class="informacion-contacto">
	  				<p>
	  					<i class="fa fa-envelope" aria-hidden="true"></i>Correos: <a href="mailto:muki@mukipalacios.com">Muki@mukipalacios.com</a><br>
		  				<i class="fa fa-globe" aria-hidden="true"></i>Página Web: <a href="http://www.mukipalacios.com/">www.mukipalacios.com</a><br>
		  				<i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook: <a href="https://www.facebook.com/PsicologiaPositivaPeru/?fref=ts" target="_blank">https://www.facebook.com/PsicologiaPositivaPeru/?fref=ts</a><br>
		  				<i class="fa fa-phone-square" aria-hidden="true"></i>Teléfonos de Contacto: <a href="tel: 985047849" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">985 047 849</a>  - rpm: <a href="tel: *555558" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">*555558</a>
	  				</p>

			</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>
