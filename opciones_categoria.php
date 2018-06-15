<?php 
	require "conexion.php";

	$opcion_categoria = $conexion ->prepare("select * from categoria");
	$opcion_categoria -> execute();
	$imp_cate = $opcion_categoria ->fetchAll();
	foreach($imp_cate as $op_cate){
		print "<option value=".$op_cate[0].">".$op_cate[1]."</option>";
	}


 ?>