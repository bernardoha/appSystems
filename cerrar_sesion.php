<?php 
	//Inicia o continua con la sesión
	session_start();
	if($_SESSION[nombre]){
		//Elimina los datos que contiene la variable de sesion
		session_unset();
		//destruye la información en la variable asociativa
		session_destroy();
		//carga la pagina index.html
		header("location:index.html");
	}{
		header("location:index.html");
	}
 ?>