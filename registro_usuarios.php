<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de usuarios</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/cabecera.css">
</head>
<body>

	<div class="container">
		<form action="" method="POST" class="formulario">
			<h2 class="titulo">REGISTRAR USUARIO</h2><br>

			<?php
			include("database.php");
			include("controlador_registrosu.php");
			?>

			<div class="padre">
				<div class="email">
					<label form="">Email</label>
					<input type="text" name="email"><br><br>	
				</div>
			<div class="password">
				<label for="">Contraseña</label>
				<input type="password" name="password"><br><br>				
			</div>
			<div class="cuenta">
			<input class="boton" type="submit" value="Registrar" name="registro"><br><br>
			<a href="index.php" class="Salir">Salir</a>
		</div>
	</div>
</form>
</div>


</body>
</html>