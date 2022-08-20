<?php 
	//Se recibe lso datos enviados desde el formulario
	$email=filter_input(INPUT_POST, "email");
	$password=filter_input(INPUT_POST, "password");
	//condicionar si hay envio de datos a la variable $email
	//Caso contrario redirige a infex.html
	if(isset($email)){
		//realizar la conexion con la base de datos
		include 'conexion.php';
		//Iniciar la sesion o continuar si hay una sesión abierta
		session_start();
		//consultar si  los datos estan guardados en ala BD
		$consulta="select idUsuario, nombreUsuario, emailUsuario,passUsuario,imagenUsuario from usuarios where emailUsuario='$email' and passUsuario='$password'";
		//realiza la consulta y guarda en resultado
		$resultado=$mysqli->query($consulta);
		//Retorna los datos a una matriz asociativa
		$row=$resultado->fetch_assoc();
		//A continuacion se presenta 2 opciones
		//Opcion1: si el usuario no existe o los datos son incorrectos
		if(!$row['idUsuario']){
			header("location:index.html");
		}else{
			//Opcion 2: Si los datos coindicense definen las variables de sesión
			$_SESSION[id_usuario]=$row['idUsuario'];
			$_SESSION[nombre]=$row['nombreUsuario'];
			$_SESSION[imagen]=$row['imagenUsuario'];
			//Se envía a la página del usuario
			header("location:pagina_usuario.php");
		}
	}else{
		header("location:index.html");
	}
 ?>