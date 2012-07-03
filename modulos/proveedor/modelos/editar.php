<?php
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

$suministra = $_POST['suministro'];

$insPro = "INSERT INTO proveedor (id_persona, suministro) ";
$insPro.= "VALUES ('$idPer', '$suministra')";
$sql = mysql_query($insPro);

$updPro = "UPDATE proveedor SET ";
$updPro.= "id_persona = '$idPer', ";
$updPro.= "suministro = '$suministro' ";
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