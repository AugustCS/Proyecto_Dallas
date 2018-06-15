<?php 

	if(isset($_REQUEST["ingresar"])){
		$msj = "";
		$user = $_POST["usuario"];
		$pass = $_POST["contra"];
		if($user == "admin" && $pass == "admin"){
				session_start();
				$_SESSION["usuario"] = $user;
				$_SESSION['login'] = "OK";
				header("Location: admin.php");
			}else{
				if($user != "admin"){
					print "<div class='error-login animated fadeInDown'>
						<p>Usuario Incorrecto</p>
					</div>";
				}
				if($pass != "admin"){
					print "<div class='error-login animated fadeInDown'>
						<p>Contraseña Incorrecta </p>
					</div>";
				}
			}			
		}

	require "view_login.html";
?>