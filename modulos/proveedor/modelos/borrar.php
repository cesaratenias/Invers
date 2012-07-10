<?php
include_once '../../../conexion.php';
$id = $_GET['id'];

$DelMed = "DELETE FROM persona WHERE id = $id";
$sql = mysql_query($DelMed);

if ($sql) {
   ?>
   <center>
       <div><img src="../../../imagenes/bien.png"/>Eliminado satisfactoriamente</div>
   </center>
   <script type="text/javascript" language="javascript">
       setTimeout("location.href='../vistas/listar.php'", 3000);
   </script>
<?php } else { ?>
   <center>
       <div><img src="../../../imagenes/no.png"/>Ha ocurrido un error, contacte al administrador</div>
   </center>
   <script type="text/javascript" language="javascript">
       setTimeout("location.href='../vistas/../vistas/listar.php'", 3000);
   </script>
<?php } ?>