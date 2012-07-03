<?php
include '../../../conexion.php'; 

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = 3;

$insPer = "INSERT INTO persona (cedula, nombre, telefono, direccion, tipo) ";
$insPer.= "VALUES ('$cedula', '$nombre','$telefono', '$direccion', '$tipo')";
$sql = mysql_query($insPer);
$idPer = mysql_insert_id();

$suministra = $_POST['suministro'];

$insPro = "INSERT INTO proveedor (id_persona, suministro) ";
$insPro.= "VALUES ('$idPer', '$suministra')";
$sql = mysql_query($insPro);

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