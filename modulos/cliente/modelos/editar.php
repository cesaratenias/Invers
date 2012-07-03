<?php
include_once '../../../conexion.php';

$id = $_GET['id'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$Upd = "UPDATE persona SET ";
$Upd.= "cedula = '$cedula', ";
$Upd.= "nombre = '$nombre', ";
$Upd.= "apellido = '$apellido', ";
$Upd.= "telefono = '$telefono', ";
$Upd.= "direccion = '$direccion' ";
$Upd.= "WHERE id = $id";
$sql = mysql_query($Upd);
if ($sql) {
    ?>
    <center>
        <div>Editada satisfactoriamente</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/listar.php'", 3000);
    </script>
<?php } else { ?>
    <center>
        <div>Ha ocurrido un error, contacte al administrador</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/nuevo.php?acc=edicion&id=<?php $_GET['id']; ?>'", 3000);
    </script>
<?php } ?>