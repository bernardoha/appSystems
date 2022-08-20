<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<label for="show-menu" class="show-menu">Mostrar Menu</label>
	<input type="checkbox" id="show-menu" role="button">
	<ul id="menu">
		<li><a href="#">Inicio</a></li>
		<li>
			<a href="#">Acerca de </a>
			<ul class="hidden">
				<li><a href="#">La empresa</a></li>
				<li><a href="#">Equipo de trabajo</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Portafolio</a>
			<ul class="hidden">
				<li><a href="#">Diseños</a></li>
				<li><a href="#">Programación</a></li>
				<li><a href="#">Bases de Datos</a></li>
			</ul>			
		</li>
		<li><a href="#">Novedades</a></li>
		<li><a href="#">Contactos</a></li>
	</ul>
</body>
</html>