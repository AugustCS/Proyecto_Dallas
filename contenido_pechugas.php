<?php 
	require 'conexion.php';
	$consulta_pechugas = $conexion ->prepare("select nom_plato,descripcion,precio from vista_platos where nom_categoria = 'pechugas'");
	$consulta_pechugas -> execute();
	$resul_pechugas = $consulta_pechugas ->fetchAll();
	foreach ($resul_pechugas as $fila_pechugas) {
?>
	<article class="item">
		<h3><?php print $fila_pechugas["nom_plato"]; ?></h3>
		<p><?php print $fila_pechugas["descripcion"]; ?></p>
		<span>Precio: S/. <?php print $fila_pechugas["precio"]; ?></span>
	</article>
<?php
	}
 ?>