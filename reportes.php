<?php

include("database.php"); 

?>

<?php

ob_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">

</head>
<body>
    <h1>LISTA DE VERIFICACION  DE REQUERIMIENTOS LEGALES</h1>
	<table class="table table-bordered">
				<thead>
					<tr>
						<th>documento de referencia</th>
						<th>Descripcion</th>
						<th>Link</th>
						<th>tipo</th>
						<th>Fecha de creacion</th>
		        <th>Fecha de actualizacion</th>
					</tr>	
				</thead>
				<tbody>

					<?php
					$query ="SELECT * FROM datos";
					$result_datos = mysqli_query($conn, $query);

					while($row = mysqli_fetch_array($result_datos)) { ?>
						<tr>
							<td><?php echo $row['documento_de_referencia']?></td>
							<td><?php echo $row['descripcion']?></td>
							<td><?php echo $row['link']?></td>
							<td><?php echo $row['tipo']?></td>
							<td><?php echo $row['fecha']?></td>
							<td><?php echo $row['fecha_actualizacion']?></td>
						</tr>
				<?php	} ?>
				</tbody>
			</table>

</body>
</html>

<?php

$html=ob_get_clean();
  //echo $html; 

  require_once("libreria/dompdf/autoload.inc.php");
  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  $options = $dompdf->getOptions();
  $options->set(array('isRemoteEnabled' => true));
  $dompdf->setOptions($options);

  $dompdf->loadHtml("$html");

  $dompdf->setPaper('letter');
  //$dompdf->setPaper('A4', 'landscape');

  $dompdf->render();

  $dompdf->stream("archivo_.pdf", array("attachment" => true));

?>

