<?php 
	require 'conexion.php';
	$consulta_pollos = $conexion ->prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'pollos'");
	$consulta_pollos -> execute();
	$resul_pollos = $consulta_pollos ->fetchAll();
	foreach ($resul_pollos as $fila_pollos) {
?>
	<article class="item">
		<h3><?php print $fila_pollos["nom_plato"]; ?></h3>
		<p><?php print $fila_pollos["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_pollos["precio"]; ?></span>
	</article>
<?php
	}
 ?>