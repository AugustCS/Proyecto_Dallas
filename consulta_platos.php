<?php 
	require 'conexion.php';
		
			$consulta_plato = $conexion ->prepare("select * from vista_platos");
			$consulta_plato ->execute();
			$resul_plato = $consulta_plato->fetchAll();
			foreach($resul_plato as $fila_plato){
				print "<div class='query_plato'>";
					print "<span>Código: P00".$fila_plato["cod_plato"]."</span>";
					print "<span>".$fila_plato["nom_plato"]."</span>";
					print "<p>".$fila_plato["descripcion"]."</p>";
					print "<span>Precio: S/. ".$fila_plato["precio"]."</span>";
					print "<span>Categoria: ".$fila_plato["nom_categoria"]."</span>";
				print "</div>";
						}
 ?>