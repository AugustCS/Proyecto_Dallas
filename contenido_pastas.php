<?php 
	require 'conexion.php';
	$consulta_pastas = $conexion -> prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'pastas'");
	$consulta_pastas -> execute();
	$resul_pastas = $consulta_pastas ->fetchAll();
	foreach ($resul_pastas as $fila_pastas) {
?>
	<article class="item">
		<h3><?php print $fila_pastas["nom_plato"]; ?></h3>
		<p><?php print $fila_pastas["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_pastas["precio"]; ?></span>
	</article>
<?php
	}

 ?>