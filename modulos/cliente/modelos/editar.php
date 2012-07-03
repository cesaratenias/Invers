<?php
include '../../../conexion.php';

$id = $_GET['id'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = 3;

$updPro = "UPDATE persona SET ";
$updPro.= "cedula = '$cedula', ";
$updPro.= "nombre = '$nombre', ";
$updPro.= "telefono = '$telefono', ";
$updPro.= "direccion = '$direccion', ";
$updPro.= "tipo = '$tipo' ";
$updPro.= "WHERE id = $id";

$sql = mysql_query($updPro);
$idPer = mysql_insert_id();

if ($sql) {
  ?>
  <center>
      <div>Guardada satisfactoriamente</div>
  </center>
  <script type="text/javascript" language="javascript">
      setTimeout("location.href='../vistas/lista.php'", 3000);
  </script>
<?php } else { ?>
  <center>
      <div>Ha ocurrido un error, contacte al administrador</div>
  </center>
  <script type="text/javascript" language="javascript">
      setTimeout("location.href='../vistas/lista.php'", 3000);
  </script>
<?php } ?>
 