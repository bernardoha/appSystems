<?php 
	$mysqli=new mysqli('localhost','root','abcd1234','dbsystem');
	if(mysqli_connect_error()){
		print "Error en la conexion: ".mysqli_connect_error();
	}
	mysqli_set_charset($mysqli, "utf8");
 ?>