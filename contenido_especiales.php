<?php 
	require 'conexion.php';
	$consulta_especiales = $conexion ->prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'especiales'");
	$consulta_especiales -> execute();
	$resul_especiales = $consulta_especiales ->fetchAll();
	foreach ($resul_especiales as $fila_especiales) {
?>
	<article class="item">
		<h3><?php print $fila_especiales["nom_plato"]; ?></h3>
		<p><?php print $fila_especiales["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_especiales["precio"]; ?></span>
	</article>
<?php
	}
 ?>