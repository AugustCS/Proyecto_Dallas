<!DOCTYPE html>
<html lang="es">
<head>
	<title>CONTÁCTANOS</title>
	<?php 
		include 'head.php';
	 ?>
</head>

<body>
	<div class="pant_contacto animated fadeInDown">
		<span style="margin-top: 3px;">Datos Ingresados Correctamente, nos estaremos comunicando contigo en la brevedad posible.</span>
		<span id="close_pant" class="cerrar_pant"><i class="fa fa-times" aria-hidden="true"></i></span>
		<div class="clear"></div>
	</div>
	
	<?php 
		include 'header.php';
	 ?>
		<div class="wrapper contac">
			<div class="ti-contac">
				<h2>CONTÁCTANOS</h2>
			</div>

			<div class="body-contac">
				
				<form id="f-llama" class="form-contac" action="contacto.php" method="POST">
					<input required="true" type="text" name="nom_contacto" placeholder="Ingrese su nombre"><br>
					<input required="true" type="email" name="correo_contacto" placeholder="Ingrese su correo"><br>
					<textarea required="true" name="sms" placeholder="Ingrese su mensaje"></textarea><br>
					<input type="submit" name="enviar" value="ENVIAR">
				</form>

				<div>
					<img src="img/contacto.jpg">
				</div>

			</div>
		</div>
	<?php
		include 'footer.php';
	 ?>
</body>
</html>