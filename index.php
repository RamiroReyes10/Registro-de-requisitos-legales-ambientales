<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
	<form action="validar.php" method="POST">
	<h1>Login</h1>
	<p>Correo <input type="text" placeholder="Ingrese correo" name="usuario"></p><br>
	<p>Contraseña <input type="password" placeholder="Ingrese contraseña" name="contraseña"></p><br>
	<input type="submit" value="Ingresar"><br><br>
	<p>&#191;NO ESTAS REGISTRADO&#63;</p>
	<a href="registro_usuarios.php" class="Registrate">REGISTRATE</a>

</form>
</body>
</html>