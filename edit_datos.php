<?php
include("database.php");
$documento_de_referencia= '';
$descripcion= '';
$link='';
$tipo='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM datos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $documento_de_referencia = $row['documento_de_referencia'];
    $descripcion = $row['descripcion'];
    $link = $row['link'];
    $tipo = $row['tipo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $documento_de_referencia = $_POST['documento_de_referencia'];
  $descripcion = $_POST['descripcion'];
  $link = $_POST['link'];
  $tipo = $_POST['tipo'];

  $query = "UPDATE datos set documento_de_referencia = '$documento_de_referencia', descripcion = '$descripcion', link = '$link', tipo = '$tipo' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Registro actualizado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: vista_datos.php');
}

?>
<?php include('partials/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_datos.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="documento_de_referencia" type="text" class="form-control" value="<?php echo $documento_de_referencia; ?>" placeholder="Actualizar documento de referencia">
        </div>
        <div class="form-group">
        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion;?></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="link" value="<?php echo $link; ?>"
            class="form-control" placeholder="Actualizar link">    
          </div>
         <div class="form-group">
         <input type="text" name=tipo value="<?php echo $tipo; ?>"
          class="form-control" placeholder="Actualizar tipo">    
          </div>
       <input type="submit" name="update">
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('partials/footer.php'); ?>