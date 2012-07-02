<?php
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = 1;

$insPro = "INSERT INTO persona (codigo, detalle, rif,  direccion, telefono, email, pais, tipo) ";
$insPro.= "VALUES ('$codigo', '$detalle', '$rif', '$direccion', '$telefono', '$email', '$pais', '$tipo')";
$sql = mysql_query($insPro);

if ($sql) {
    ?>
    <script type="text/javascript" language="javascript">
        location.href='index.php?mod=proveedor&acc=lista&error=f';
    </script>
<?php } else { ?>
    <script type="text/javascript" language="javascript">
        location.href='index.php?mod=proveedor&acc=registro&error=3';
    </script>
<?php } 
$empresa = $_POST['empresa'];
$rif = $_POST['rif'];
$suministra = $_POST['suministra'];

?>
