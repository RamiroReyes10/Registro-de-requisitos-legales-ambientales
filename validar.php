<?php 

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$_SESSION['usuario']=$usuario;

include('database.php');

$consulta="SELECT * FROM user WHERE email='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location: vista_datos.php");
}else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad"> ERROR DE AUTENTIFICACION</h1>
	<?php 
}
mysqli_free_result($resultado);
mysqli_close($conn);

