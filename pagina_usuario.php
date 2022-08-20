<?php 
	include 'conexion.php';
	//continuar con la sesion
	session_start();
	//validar si se está ingresando correctamente
	//Si no se ha creado la ssesion no reenviara a index.html
	if(!$_SESSION){
		header("location:index.html");
	}
	$imagen=$_SESSION['imagen'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pagina de Usuario</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 	<div class="user"><?php print "<img src='$imagen' width='40' height='40'>"; ?>
 		Usuario:<?php print " ".$_SESSION['nombre']; ?>
 		<a href="cerrar_sesion.php"><button>Salir</button></a>
 	</div>
 	<div class="header"><?php include("header.php"); ?></div>
 	<h1 id="titulo">Bienvenidos a la Página del Usuario</h1>
 	<form>
 		producto: <input type="text" name=""><br>
 		Precio: <input type="text" name=""><br>
 		Cantidad: <input type="text" name=""><br>
 		Procedencia: <input type="text" name=""><br>
 		Total: <input type="text" name=""><br>
 	</form>
 </body>
 </html>
 <?php 
 	include 'footer.php';
  ?>