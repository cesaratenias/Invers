<?php
include_once '../../../conexion.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = '1';

$sqlCi = "INSERT INTO persona (cedula, nombre, apellido, telefono, direccion, tipo) ";
$sqlCi.= "VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$direccion', '$tipo')";
$sql = mysql_query($sqlCi);
if ($sql) {
    ?>
    <center>
        <div>Guardada satisfactoriamente</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/listar.php'", 3000);
    </script>
<?php } else { ?>
    <center>
        <div>Ha ocurrido un error, contacte al administrador</div>
    </center>
    <script type="text/javascript" language="javascript">
        setTimeout("location.href='../vistas/nuevo.php?acc=&edicion&id=<?php $_GET['id']; ?>'", 3000);
    </script>
<?php } ?>