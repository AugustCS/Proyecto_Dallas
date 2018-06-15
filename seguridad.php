<?php 
	session_start();
	if($_SESSION['login'] != "OK"){
		header("Location:sistema.php");
		exit();
	}



 ?>