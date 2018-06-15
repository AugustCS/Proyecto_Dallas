<?php 
	require 'conexion.php';
	$consulta_carnes = $conexion -> prepare("select nom_plato,descripcion,precio from vista_platos
		where nom_categoria = 'carnes'");
	$consulta_carnes -> execute();
	$resul_carnes = $consulta_carnes -> fetchAll();
	foreach($resul_carnes as $fila_carnes){
?>
		
		<article class="item">
			<h3><?php print $fila_carnes["nom_plato"]; ?></h3>
			<p><?php print $fila_carnes["descripcion"]; ?></p>
			<span>Precio: S/. <?php print $fila_carnes["precio"]; ?></span>
		</article>
<?php 
		}
?>