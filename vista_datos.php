<?php include("database.php") ?>

<?php include("partials/header.php") ?>
    
<div class="container p-4">

	<div class="row">

		<div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
				<?= $_SESSION['message'] ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

				<?php unset($_SESSION['message']); } ?>	  
				<div class="card card-body">
					  <form action="save_datos.php" method="POST">
						  <div class="form-group">
							  <input type="text" name="documento_de_referencia" class="form-control" placeholder="Documento de referencia" autofocus>
						  </div>
						  <div class="form-group">
							  <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de la requisicion"></textarea>
						  </div>
						  <div class="form-group">
							  <input type="text" name="link" class="form-control" placeholder="Link" autofocus>
						  </div>
						  <div class="form-group">
							  <input type="text" name="tipo" class="form-control" placeholder="Tipo" autofocus>
						  </div>
						  <input type="submit" name="save_datos" class="btn btn-success btn-block" value="Guardar registro"><br>
						  <a href="reportes.php" class="ReportePDF">Reportes a PDF</a>
	  
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
						  <a href="index.php" class="Logout">Logout</a>
					  </form>
				</div>
        	</div>
		

		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr border="3px"width="500" cellpadding="5" bgcolor="white">
						<th>documento de referencia</th>
						<th>Descripcion</th>
						<th>Link</th>
						<th>Tipo</th>
						<th>Fecha de creacion</th>
						<th>Fecha de actualizacion</th>
						<th>Acciones</th>
					</tr>	
				</thead>
				<tbody>
					<?php
					$query ="SELECT * FROM datos";
					$result_datos = mysqli_query($conn, $query,);

					while($row = mysqli_fetch_array($result_datos)) { ?>
						<tr bgcolor="white">
							<td><?php echo $row['documento_de_referencia']?></td>
							<td><?php echo $row['descripcion']?></td>
							<td><?php echo $row['link']?></td>
							<td><?php echo $row['tipo']?></td>
							<td><?php echo $row['fecha']?></td>
							<td><?php echo $row['fecha_actualizacion']?></td>
							<td>
								<a href="edit_datos.php?id=<?php echo $row['id']?>" class="btn btn-secundary">
									<i class="fas fa-marker"></i>
								</a>
								<a href="delete_datos.php?id=<?php echo $row['id']?>"class="btn btn-danger">
									<i class="fas fa-trash-alt"></i>
								</a>
							</td>
						</tr>
				<?php	} ?>
				</tbody>
			</table>
		</div>
	</div>	

<?php include("partials/footer.php"); ?>

