<?php
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = 1;

$insPer = "INSERT INTO persona (cedula, nombre, apellido, telefono, direccion, tipo) ";
$insPer.= "VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$direccion', '$tipo')";
$sql = mysql_query($insPer);

if ($sql) {
    ?>
    <script type="text/javascript" language="javascript">
        location.href='../vistas/lista.php';
    </script>
<?php } else { ?>
    <script type="text/javascript" language="javascript">
        location.href='../vistas/registro.php';
    </script>
<?php } ?>
