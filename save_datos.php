<?php

include("database.php");

if(isset($_POST['save_datos'])){
	$documento_de_referencia = $_POST['documento_de_referencia'];
	$link = $_POST['link'];
	$descripcion = $_POST['descripcion'];
	$tipo= $_POST['tipo'];

	$query = "INSERT INTO datos(documento_de_referencia, descripcion, link, tipo) VALUES ('$documento_de_referencia', '$descripcion', '$link', '$tipo')";
	$result = mysqli_query($conn, $query);
	  if(!$result) {
    die("Query Failed.");
  }


  $_SESSION['message'] = 'Registro guardado satisfactoriamente';
  $_SESSION['message_type'] = 'success';

	header("Location: vista_datos.php");

}

?>