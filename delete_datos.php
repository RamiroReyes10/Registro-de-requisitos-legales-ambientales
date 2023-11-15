<?php

include("database.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM datos WHERE id = $id";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("Consulta fallida");
	}

	$_SESSION['message'] = 'Registro eliminado satisfactoriamente';
	$_SESSION['message_type'] = 'danger';
	header("Location: vista_datos.php");
}

?>