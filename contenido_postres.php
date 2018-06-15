<?php 
	require 'conexion.php';
	$consulta_postres = $conexion ->prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'postres'");
	$consulta_postres -> execute();
	$resul_postres = $consulta_postres ->fetchAll();
	foreach ($resul_postres as $fila_postres) {
?>
	<article class="item">
		<h3><?php print $fila_postres["nom_plato"]; ?></h3>
		<p><?php print $fila_postres["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_postres["precio"]; ?></span>
	</article>
<?php
	}
 ?>