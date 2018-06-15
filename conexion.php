<?php 
	$host = "localhost";
	$user = "root";
	$pass = "recovery";
	$conexion = null;

	try {
		$conexion = new PDO("mysql:host=".$host.";dbname=bd_dallas2",$user,$pass);
	} catch (PDOException $e) {
		print "Error: ".$e-> getMessage();
	}finally{
		return $conexion;
	}

 ?>