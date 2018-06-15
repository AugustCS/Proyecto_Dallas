<!DOCTYPE html>
<html lang="es">
<head>
	<title>RESERVAS</title>
	<?php 
		include 'head.php';
	 ?>
</head>

<body>
	<div class="pant_reserva animated fadeInDown">
		<span style="margin-top: 3px;">Datos Ingresados Correctamente, nos estaremos comunicando contigo en la brevedad posible.</span>
		<span id="close_reser" class="cerrar_pant"><i class="fa fa-times" aria-hidden="true"></i></span>
		<div class="clear"></div>
	</div>
	
	<?php 
		include 'header.php';
	 ?>
	
	<div class="wrapper reserv">
		<h2>RESERVAS</h2>
		<div class="ti-reserv">
			<p>Antes de continuar sírvase leer las siguientes indicaciones:</p>
			<ul>
				<li>* Se tomarán en cuenta las reservas realizadas con un mínimo de 24 horas de anticipación.</li>
				<li>* Se aceptarán reservas por este medio tan solo de Lunes a Viernes</li>
				<li>* En el caso se requiera una reserva para fines de semana, comunicarse directamente con el número de reserva del restaurante de su elección. Mayor información ingresar a la sección restaurantes de nuestra web.</li>
				<li>* Reservas no disponibles en feriados.</li>
				<li>* La reserva solo será válida cuando el restaurante realice la confirmación por correo electrónico o llamada telefónica.</li>
			</ul>
			<div class="caja-ti">
				<span id="sure">ACEPTAR</span>
			</div>
		</div>

		<div class="body-reserv" id="b-re">

			<form id="f-reserva" class="form-reserv" method="POST">

				<input class="text-reser" required="true" type="text" name="nom" placeholder="Ingrese su nombre"><br>

				<input required="true" type="email" name="correo" placeholder="Ingrese su correo"><br>

				<input class="fono" required="true" type="text" name="telefono" placeholder="Ingrese su número móvil">

				<input class="ca-fecha" id="datepicker" required="true" type="text" placeholder="Ingrese la fecha del evento" name="fecha"><br>

				<input class="text-reser" required="true" type="text" name="cantidad" placeholder="Ingrese la cantidad de mesas a reservar"><br>

				<textarea required="true" name="coment" placeholder="Comentario"></textarea><br>

				<input type="submit" value="ENVIAR" name="enviar">
			</form>

			<div>
				<img src="img/reservas.jpg">
			</div>
		</div>

	</div>

	<?php 
		include 'footer.php';
	 ?>
</body>
</html>