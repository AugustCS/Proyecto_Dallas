<?php
	include 'seguridad.php'; 
	require 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" description="Izzy">
	<title>ADMINISTRADOR</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="icon" href="img/icon_pollo.jpg">
	<link rel="stylesheet" type="text/css" href="estilos/reset.css">
	<link rel="stylesheet" href="estilos/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estilos/other_estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Rochester|Lobster+Two|Quattrocento|Alfa+Slab+One|Luckiest+Guy|Baloo+Thambi|Maiden+Orange|Roboto+Slab|Passion+One|Playfair+Display+SC:700|Mogra|Montserrat:700|Oswald|Squada+One|Zilla+Slab" rel="stylesheet">
</head>
<body class="body-ad">
	<header>
		<div class="wrapper cabe-ad">
			<h1>DALLAS PARRILLADAS</h1>
			<ul class="nav">
				<li class="cons">CONSULTAS
					<ul>
						<li class="co-re">RESERVAS</li>
						<li class="co-pe">PEDIDOS</li>
						<li class="co-cl">CONTACTOS</li>
					</ul>
				</li>
				<li class="ins">INSERCIONES
					<ul>
						<li class="in-pl">INSERTAR PLATO</li>
						<li class="in-cat">INSERTAR CATEGORIA</li>
					</ul>
				</li>
			</ul>
			<div class="ca-font">
				<a target="_blank" title="Ir a Web Usuario" href="index.php"><i class="fa fa-window-restore" aria-hidden="true"></i></a>
				<a id="ic-lo"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
				<div class="caja-usuario">
					<span><i class="fa fa-users" aria-hidden="true"></i> Usuario</span>
					<span style="
						font-family: 'Roboto', sans-serif;
						font-size: 15px;
						font-weight: bold;
						margin-top: 10px;
					"><?php print $_SESSION["usuario"]; ?></span>
					<a href="salir.php"><i class="fa fa-user-times" aria-hidden="true"></i> Cerrar Sesion</a>
					<span id="cerrar_usuario" style="
						width: 10px;
						color:red;
						float:right;
						margin-right:10px;
					"><i class="fa fa-times" aria-hidden="true"></i></span>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</header>

	<div class="wrapper contenido">

		<div class="cjcon con_reservas">
			<form method="POST">
				<input type="submit" name="btn-re" value="Consultar Reservas">
			</form>
			<div class="content-reserv">
				
			</div>
		</div>

		<div class="cjcon con_pedidos">
			<form method="POST">
				<input type="submit" name="btn-pe" value="Consultar Pedidos">
			</form>
			<div class="content-pedid">
				
			</div>
		</div>

		<div class="cjcon con_contactos">
			<span class="cargar_contacto"><i class="fa fa-spinner" aria-hidden="true"></i> RECARGAR</span>
			<div id="data-contac" class="content-contac">

				
			</div>
		</div>

		<!-- CAJON INSERTAR PLATOS -->
		<div class="cjcon in_platos">
			<form id="f-pl" class="form-plat" method="POST">
				<label>INGRESE:</label><br><br>
				<input required="true" name="nomplato" type="text" placeholder="Nombre de plato"><br><br>
				<textarea required="true" name="desplato" placeholder="Descripcion del plato"></textarea><br><br>
				<input required="true" step="1" name="preplato" type="number" placeholder="Precio en soles"><br><br>
				<select id="data_opciones" name="cateplato">
					
				</select><br><br>
				<input type="submit" name="btn-in-plat" value="INSERTAR">
				<span class="s-carga"><i class="fa fa-refresh fa-spin" aria-hidden="true"></i></span><br><br>
				<div>
					<span class="s-check"><i class="fa fa-check" aria-hidden="true"></i> Ingresado Correctamente</span>
					<span class="s-close"><i class="fa fa-times" aria-hidden="true"></i> Error</span>
				</div>
			</form>
			<div id="data-plat" class="content-plat">
				<!-- espacio vacio que completa el <consulta class="php"</consulta>-->
			</div>
			<div class="clear"></div>
		</div>

		<!-- CAJON INSERTAR CATEGORIAS -->
		<div class="cjcon in_catego">
			<form id="f-cat" class="form-cate" method="POST">
				<label>INGRESE NOMBRE DE LA CATEGORIA</label><br><br>
				<input required type="text" name="nom-cat"><br><br>
				<input type="submit" name="btn-in-cat" value="INSERTAR">
				<span class="s-carga"><i class="fa fa-refresh fa-spin" aria-hidden="true"></i></span><br><br>
				<div>
					<span class="s-check"><i class="fa fa-check" aria-hidden="true"></i> Ingresado Correctamente</span>
					<span class="s-close"><i class="fa fa-times" aria-hidden="true"></i>Error</span>
				</div>
			</form>
			<div name="data-plat" id="data-cate" class="content-cate">

			</div>
			<div class="clear"></div>
		</div>

	</div>

	<script src="js/jquery-1.11.2.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.panelslider.min.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/logica.js"></script>
</body>
</html>