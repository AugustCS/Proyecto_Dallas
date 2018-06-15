<?php 

	require "conexion.php";
	$consulta_categoria = $conexion ->prepare("select * from categoria");
	$consulta_categoria ->execute();
	$resul_categoria = $consulta_categoria->fetchAll();
	foreach($resul_categoria as $fila_cate){
		print "<div class='query_categoria'>";
			print  "<span>C".$fila_cate['id_categoria']."</span>";
			print "<span>".$fila_cate['nom_categoria']."</span>";
		print "</div>";
	}





 ?>