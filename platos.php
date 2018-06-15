<!DOCTYPE html>
<html lang="es">
<head>
	<title>NUESTRA CARTA</title>
	<?php 
		include 'head.php';
	 ?>
</head>

<body>
	<?php 
		include 'header.php';
	 ?>

	<div class="wrapper pla">
		<section class="section_bolas">
			<article id="bola_carne" class="arti b2">
				<span>PARRILLAS</span>
			</article>
			<article id="bola_ensalada" class="arti b3">
				<span>ENSALADAS</span>
			</article>
			<article id="bola_especiales" class="arti b4">
				<span>ESPECIALES</span>
			</article>
			<article id="bola_pechugas" class="arti b5">
				<span>PECHUGAS</span>
			</article>
			<article id="bola_pasta" class="arti b1">
				<span>PASTAS</span>
			</article>
			<article id="bola_piqueos" class="arti b6">
				<span>PIQUEOS</span>
			</article>
			<article id="bola_pollos" class="arti b7">
				<span>POLLOS</span>
			</article>
			<article id="bola_postres" class="arti b8">
				<span>POSTRES</span>
			</article>
		</section>
	</div>

	<div class="modal_carta animated zoomIn">
			<span class="close_modal_carta"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
			
			<div class="wrapper opciones_iphone">
				<ul class="ul_li_iphone">
					<li id="ip_pastas">PASTAS</li>
					<li id="ip_carnes">PARRILLAS</li>
					<li id="ip_ensaladas">ENSALADAS</li>
					<li id="ip_especiales">ESPECIALES</li>
					<li id="ip_pechugas">PECHUGAS</li>
					<li id="ip_pollos">POLLOS</li>
					<li id="ip_postres">POSTRES</li>
					<li id="ip_piqueos">PIQUEOS</li>
					<div class="clear"></div>
				</ul>
			</div>

			<section id="sli_carne" class="wrapper seccion">
				<h2 class="title_box_modal">PARRILLAS</h2>
				<section id="sli-parr" class="box_article">
				</section>
			</section>

			<section id="sli_ensaladas" class="wrapper seccion">
				<h2 class="title_box_modal">ENSALADAS</h2>
				<section id="sli-ensa" class="box_article">
		    	</section>
			</section>

			<section id="sli_pastas" class="wrapper seccion">
				<h2 class="title_box_modal">PASTAS</h2>
				<section id="sli-pas" class="box_article">
		    	</section>
			</section>

			<section id="sli_especiales" class="wrapper seccion">
				<h2 class="title_box_modal">ESPECIALES</h2>
				<section id="sli-espe" class="box_article">
				</section>
			</section>

			<section id="sli_pechugas" class="wrapper seccion">
				<h2 class="title_box_modal">PECHUGAS</h2>
				<section id="sli-pechu" class="box_article"></section>
			</section>

			<section id="sli_pollos" class="wrapper seccion">
				<h2 class="title_box_modal">POLLOS</h2>
				<section id="sli-poll" class="box_article">
				</section>
			</section>

			<section id="sli_postres" class="wrapper seccion">
				<h2 class="title_box_modal">POSTRES</h2>
				<section id="sli-post" class="box_article"></section>
			</section>

			<section id="sli_piqueos" class="wrapper seccion">
				<h2 class="title_box_modal">PIQUEOS</h2>
				<section id="sli-piq" class="box_article"></section>
			</section>

	</div>

	<?php 
		include 'footer.php';
	 ?>
</body>
</html>