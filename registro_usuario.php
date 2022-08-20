<?php 
	include 'conexion.php';
	//capturar datos enviados desde registrar.html
	$usuario=filter_input(INPUT_POST, "usuario");
	$email=filter_input(INPUT_POST, "email");
	$password=filter_input(INPUT_POST, "password");

	//proceso para subir imagen y capturar su nombre
	$ruta="images";
	$archivo=$_FILES['imagen']['tmp_name'];
	$nombreArchivo=$_FILES['imagen']['name'];
	//subir el achivo imagen a la carpeta images
	move_uploaded_file($archivo, $ruta."/".$nombreArchivo);
	//Se concatena la ruta y el nombre de archivo para actualizar la variable $ruta y luego ser enviado a la DB
	$ruta=$ruta."/".$nombreArchivo;

	//Insertar datos a la tabla usuarios
	$query="insert into usuarios(nombreUsuario,emailUsuario,passUsuario,imagenUsuario) values ('$usuario','$email','$password','$ruta')";
	$resultado=$mysqli->query($query);
 	if(isset($resultado)){
		print "Datos almacenados correctamente....";
		print "<a href='index.html'>Regresar</a>";
	}else{
		print "Error al registrar datos....";
		print "<a href='registrar.html'>Regresar</a>";
	}
 ?>