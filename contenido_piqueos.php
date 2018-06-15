<?php 
	require 'conexion.php';
	$consulta_piqueos = $conexion ->prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'piqueos'");
	$consulta_piqueos -> execute();
	$resul_piqueos = $consulta_piqueos ->fetchAll();
	foreach ($resul_piqueos as $fila_piqueos) {
?>
	<article class="item">
		<h3><?php print $fila_piqueos["nom_plato"]; ?></h3>
		<p><?php print $fila_piqueos["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_piqueos["precio"]; ?></span>
	</article>
<?php
	}
 ?>