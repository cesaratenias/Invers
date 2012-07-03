<?php
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$rif = $_POST['rif'];
$telefono = $_POST['telefono'];
$suministra = $_POST['suministra'];
$direccion = $_POST['direccion'];
$tipo = 3;

$updPro = "UPDATE persona SET ";
$updPro.= "cedula = '$cedula', ";
$updPro.= "apellido = '$apellido', ";
$updPro.= "empresa = '$empresa', ";
$updPro.= "rif = '$rif', ";
$updPro.= "telefono = '$telefono', ";
$updPro.= "suministra = '$suministra', ";
$updPro.= "pais = '$pais', ";
$updPro.= "direccion = '$direccion', ";
$updPro.= "tipo = '$tipo' ";
$updPro.= "WHERE id = $id";

$sql = mysql_query($updPro);

if ($sql) {
    ?>
    <script type="text/javascript" language="javascript">
        location.href='index.php?mod=proveedor&acc=lista&error=f';
    </script>
<?php } else { ?>
    <script type="text/javascript" language="javascript">
        location.href='index.php?mod=proveedor&acc=edicion&error=3';
    </script>
<?php } ?>