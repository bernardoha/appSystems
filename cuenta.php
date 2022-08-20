<!DOCTYPE html>
<html>
	<?php 
		//Si el envio post en email es distinto a vacio
		if(filter_input(INPUT_POST, "email")!=''){
			$cuenta=filter_input(INPUT_POST, "email");
			include 'conexion.php';
			$consulta="select * from usuarios where emailUsuario='$cuenta'";
			$resultado=$mysqli->query("$consulta");
			//Retorna los datos a una matriz asociativa
			$row=$resultado->fetch_assoc();
		}else{
			header("location:index.html");
		}
	 ?>
<head>
	<title>Ingreso al Sistema</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="logo"><img src="images/logo_linux.png" width="300"></div>
	<h2 id="texto-logo">Inicia sesión para acceder al sistema</h2>
	<form action="acceso_usuario.php" method="post">
		<div id="silueta"><img src="<?php print $row['imagenUsuario'];?>" width="100" height="100"></div>
		<input type="hidden" name="email" maxlength="15" value="<?php print $cuenta;?>">
		<input type="password" name="password" maxlength="15" placeholder="Ingrese Contraseña">
		<button type="submit">Iniciar Sesión</button>
	</form>
	<h2 id="link-reg"><a href="registrar.html">Crear Cuenta</a></h2>
</body>
</html>