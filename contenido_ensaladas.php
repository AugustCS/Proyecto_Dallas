<?php 
	require 'conexion.php';
	$consulta_ensaladas = $conexion -> prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'ensaladas'");
	$consulta_ensaladas -> execute();
	$resul_ensaladas = $consulta_ensaladas ->fetchAll();
	foreach ($resul_ensaladas as $fila_ensaladas) {
?>
	<article class="item">
		<h3><?php print $fila_ensaladas["nom_plato"]; ?></h3>
		<p><?php print $fila_ensaladas["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_ensaladas["precio"]; ?></span>
	</article>
<?php
	}
 ?>