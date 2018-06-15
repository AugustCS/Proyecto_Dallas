<!DOCTYPE html>
<html lang="es">
<head>
	<title>DALLAS PARRILLADAS</title>
	<?php 
		include 'head.php';
	 ?>
</head>

<body>
	<div class="pant_noticia animated fadeInDown">
		<span style="margin-top: 3px;">Correo Registrado Correctamente, Gracias por suscribirse a nuestro Newsletter</span>
		<span id="close_pant" class="cerrar_pant"><i class="fa fa-times" aria-hidden="true"></i></span>
		<div class="clear"></div>
	</div>

	<?php 
		include 'header.php';
	 ?>

	<section class="s1">
		<div class="wrapper">
				<div class="one animated bounce">
					<span class="da">Dallas Parrilladas</span>
					<hr>
					<h2 class="t1">EXCELENCIA</h2>
					<h2 class="t2">GRAN SERVICIO</h2>
					<p class="p-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eius sequi, vel doloribus repellat excepturi fuga quibusdam aut. Accusamus repudiandae ab exercitationem quae! Officia ab nostrum itaque, facilis neque accusamus!</p>
					<div class="caja-a-s1">
						<span><i class="fa fa-cutlery" aria-hidden="true"></i></span>
						<h3>SINGLE PRODUCT SHOWCASES</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="caja-b-s1">
						<span><i class="fa fa-free-code-camp" aria-hidden="true"></i></span>
						<h3>SINGLE PRODUCT SHOWCASES</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="slider">
					<div class="flexslider flex1">
					  <ul class="slides sl1">
					    <li data-thumb="img/s2.jpg">
					      <img src="img/s2.jpg"></li>
					    <li data-thumb="img/s2.jpg">
					      <img src="img/s2.jpg"></li>
					    <li data-thumb="img/s3.jpg">
					      <img src="img/s3.jpg"></li>
					    <li data-thumb="img/s4.jpg">
					      <img src="img/s4.jpg"></li>
					  </ul>
					</div>
				</div>	
		</div>
	</section>

	<div class="s2">
			<div class="wrapper caja-s2">
				<h2 class="tit">GRAN VARIEDAD DE PLATOS</h2>
				<p class="parr">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				</p>
			</div>
			<div class="flexslider flex2">
				  <ul class="slides sl2">
				    <li>
				      <img src="img/flex2_parrilla/p1.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p2.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p3.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p4.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p5.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p6.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p7.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p8.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p9.jpg" />
				    </li>
				    <li>
				      <img src="img/flex2_parrilla/p1.jpg" />
				    </li>
				  </ul>
			</div>
	</div>
	
	<div class="niños">
		<div class="wrapper com-ni">
			<span class="ni1">¿Niños?</span>
			<h2 class="ni2">LOS MEJORES COMBOS</h2>
			<p class="ni	3">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
			<section class="sec-com">
				<article class="com-1">
					<span class="n-com">Combo 2</span><br>
					<span class="p-com">S/. 25</span>
					<p>Spaguetti Kids<br>a la Boloñesa</p>
					<p>Bebida 8oz</p>
					<p>Postre</p>
					<p>Helado o</p>
					<p>Crema Volteada Jr.</p>
					<a class="ni-a">Ver Mas</a>
				</article>
				
				<article class="com-2">
					<span class="n-com">Combo 1</span><br>
					<span class="p-com">S/. 30</span>
					<p>Spaguetti Kids<br>a la Boloñesa</p>
					<p>Bebida 8oz</p>
					<p>Postre</p>
					<p>Helado o</p>
					<p class="p-mar">Crema Volteada Jr.</p>
					<a class="ni-a">Ver Mas</a>
				</article>

				<article class="com-3">
					<span class="n-com">Combo 3</span><br>
					<span class="p-com">S/. 20</span>
					<p>Spaguetti Kids<br>a la Boloñesa</p>
					<p>Bebida 8oz</p>
					<p>Postre</p>
					<p>Helado o</p>
					<p>Crema Volteada Jr.</p>
					<a class="ni-a">Ver Mas</a>
				</article>
			</section>
		</div>
	</div>

	<div class="suscripcion">
		<div class="wrapper sus">
			<h2>¿Quieres conocer todas nuestras ofertas y promociones al instante?</h2>
			<form id="f-noti" class="form-sus" method="POST">
				<input type="email" required="true" name="email_noticia" placeholder="Ingrese su correo"><br>
				<input type="submit" name="en-correo" value="Suscribete Ahora">
				<div class="clear"></div>
			</form>
		</div>
	</div>
	
	<div class="avan-carta">
		<div class="trans-carta">
			<div class="wrapper mod-carta">
				<h2>NUESTRA CARTA</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<section class="sec-carta">
					<article>
						<h3>PIQUEOS</h3>
						<p>Diam diam suspendisse pulvinar wisi nisl ligula, nulla vel vehicula feugiat, volutpat porta cras euismod lorem amet</p>
						<img src="img/piqueos-cel.jpg">
					</article>

					<article>
						<h3>ESPECIALIDADES</h3>
						<p>Diam diam suspendisse pulvinar wisi nisl ligula, nulla vel vehicula feugiat, volutpat porta cras euismod lorem amet</p>
						<img src="img/especialidades.jpg">
					</article>

					<article>
						<h3>ENSALADAS</h3>
						<p>Diam diam suspendisse pulvinar wisi nisl ligula, nulla vel vehicula feugiat, volutpat porta cras euismod lorem amet</p>
						<img src="img/ensaladas.jpg">
					</article>

					<article>
						<h3>PASTAS</h3>
						<p>Diam diam suspendisse pulvinar wisi nisl ligula, nulla vel vehicula feugiat, volutpat porta cras euismod lorem amet</p>
						<img src="img/pastas-cel.jpg">
					</article>

					<article>
						<h3>PARRILLAS</h3>
						<p>Diam diam suspendisse pulvinar wisi nisl ligula, nulla vel vehicula feugiat, volutpat porta cras euismod lorem amet</p>
						<img src="img/carnes-cel.jpg">
					</article>

					<article>
						<h3>POLLOS</h3>
						<p>Diam diam suspendisse pulvinar wisi nisl ligula, nulla vel vehicula feugiat, volutpat porta cras euismod lorem amet</p>
						<img src="img/pollos.jpg">
					</article>
				</section>
				<a class="va-pla" href="platos.html">¿QUIERES MAS?</a>
			</div>	
		</div>
	</div>

	<div class="slider-vinos">
		<div class="wrapper vinos">
			<h2>SIEMPRE LO MEJOR</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="owl-carousel" id="sli-vin">
		  <img src="img/marques-de-arienzo.jpg">
		  <img src="img/molina.jpg">
		  <img src="img/navarro.jpg">
		  <img src="img/protos.jpg">
		  <img src="img/septima.png">
		  <img src="img/vina-errazuriz.jpg">
		</div>
	</div>

	<?php 
		include 'footer.php';
	 ?>
</body>
</html>