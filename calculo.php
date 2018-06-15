<?php 
	require "conexion.php";
	$tag = $_POST["tag"];
	
	if(isset($tag) && $tag!==""){

		if($tag == 'inserplato'){
			$nom = $_POST["nomplato"];
			$des = $_POST["desplato"];
			$pre = $_POST["preplato"];
			$cate = $_POST["cateplato"];

			$nom = trim($nom);//quitar espacios al inicio y final
			$nom = filter_var($nom,FILTER_SANITIZE_STRING);//valida que no haya caracteres invalidos

			$des = trim($des);
			$des = filter_var($des,FILTER_SANITIZE_STRING);

			$pre = filter_var($pre,FILTER_SANITIZE_NUMBER_FLOAT);

			$inser_pla = $conexion ->prepare("insert into platos(nom_plato,descripcion,id_categoria,precio) values('".$nom."','".$des."','".$cate."','".$pre."')");
			$inser_pla->execute();
			
			print true;

		}else{
			print false;
		} 


		if($tag == 'insercate'){
			$nom_cat = $_POST["nom-cat"];

			$nom_cat = strtoupper($nom_cat);
			$nom_cat = trim($nom_cat);
			$nom_cat = filter_var($nom_cat,FILTER_SANITIZE_STRING);

			$inser_cate = $conexion ->prepare("insert into categoria(nom_categoria) values('".$nom_cat."')");
			$inser_cate->execute();

			print true;

		}else{
			print false;
		}

		if($tag == 'insernoti'){
			$cor_noti = $_POST["email_noticia"];
			$cor_noti = trim($cor_noti);
			$cor_noti = filter_var($cor_noti,FILTER_SANITIZE_EMAIL);

			$inser_noti = $conexion ->prepare("insert into noticias(correo_usuario) values('".$cor_noti."')");
			$inser_noti ->execute();
			print true;
		}else{
			print false;
		}

		if($tag == 'contactanos'){
			$nom_contacto = $_POST["nom_contacto"];
			$correo_contacto = $_POST["correo_contacto"];
			$sms_contacto = $_POST["sms"];

			$nom_contacto = trim($nom_contacto);
			$nom_contacto = filter_var($nom_contacto,FILTER_SANITIZE_STRING);
			$nom_contacto = ucwords($nom_contacto);// poner en mayuscula la primera letra de cada palabra de la cadena

			$correo_contacto = trim($correo_contacto);
			$correo_contacto = filter_var($correo_contacto,FILTER_SANITIZE_EMAIL);

			$sms_contacto = trim($sms_contacto);
			$sms_contacto = filter_var($sms_contacto,FILTER_SANITIZE_STRING);
			$sms_contacto = ucfirst($sms_contacto);//poner en mayuscula la primera letra de la cadena

			$inser_cont = $conexion -> prepare("insert into contacto(nom_contacto,correo_contacto,sms_contacto) values('".$nom_contacto."','".$correo_contacto."','".$sms_contacto."')");
			$inser_cont -> execute();
			print true;
		}else{
			print false;
		}

		if($tag == 'reservando'){
			$nom_cli  = $_POST["nom"];
			$correo_cli = $_POST["correo"];
			$fono = $_POST["telefono"];
			$fechita = $_POST["fecha"];
			$cant_mesas = $_POST["cantidad"];
			$comentario = $_POST["coment"];

			$inser_reserva = $conexion ->prepare("insert into reservas(nom_cliente,email_cliente,movil_cliente,fecha,cant_mesas,comentario,estado) values('".$nom_cli."','".$correo_cli."','".$fono."','".$fechita."','".$cant_mesas."','".$comentario."','PENDIENTE')");

			$inser_cliente = $conexion ->prepare("insert into cliente(nom_cliente,email_cliente,movil_cliente) values('".$nom_cli."','".$correo_cli."','".$fono."')");

			$inser_cliente -> execute();
			$inser_reserva -> execute();			
			
			print true;
		}else{
			print false;
		}
	}

		


	
 ?>		
