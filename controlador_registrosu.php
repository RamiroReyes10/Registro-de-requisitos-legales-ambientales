<?php 
if (!empty($_POST["registro"])) {
	if(empty($_POST["email"]) or empty($_POST["password"])) {
		echo '<div class="alerta">Uno de los campos esta vacio</div><br><br>';
	} else {
		$email=$_POST["email"];
		$password=$_POST["password"];
		$sql=$conn->query("INSERT INTO user(email,password)values('$email','$password') ");
		if ($sql==1) {
		echo '<div class="success">Usuario registrado correctamente</div><br><br>';
		} else {
			echo '<div class="alerta">error al registrar</div>';

		} 

	}
}

?>