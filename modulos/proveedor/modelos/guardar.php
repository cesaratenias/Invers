<?php
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
    <script type="text/javascript" language="javascript">
        location.href='../vistas/lista.php';
    </script>
<?php } else { ?>
    <script type="text/javascript" language="javascript">
        location.href='../vistas/registro.php';
    </script>
<?php } ?>
