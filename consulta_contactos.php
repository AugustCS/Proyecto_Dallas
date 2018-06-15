<?php 
	require "conexion.php";

	$consul_contacto = $conexion -> prepare("select * from contacto");
	$consul_contacto ->execute();

	$resul_contacto = $consul_contacto ->fetchAll();

	foreach ($resul_contacto as $fila_contacto) {
		print "<div class='query_contacto'>";
			print "<span style='
				float:left;
			'>CODIGO: C00".$fila_contacto["id_contacto"]."</span>";
			print "<span>NOMBRE: ".$fila_contacto["nom_contacto"]."</span>";
			print "<span style='
				float:right;
			'>CORREO: ".$fila_contacto["correo_contacto"]."</span>";
			print "<p>".$fila_contacto["sms_contacto"]."</p>";
			print "<div class='clear'></div>";
		print "</div>";
	}
	


 ?>