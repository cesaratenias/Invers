<?php

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sqlCi = "INSERT INTO persona (cedula, nombre, apellido, telefono, direccion) ";
$sqlCi.= "VALUES ('$cedula', '$nombre','$apellido',$telefono, $direccion,)";
$sql = mysql_query($sqlCi);

if ($sql) {
    ?>
    <script type="text/javascript" language="javascript">
        location.href='../&error=f';
    </script>
<?php } else { ?>
    <script type="text/javascript" language="javascript">
        location.href='index.php?mod=insumo&acc=registro&error=3';
    </script>
<?php } ?>