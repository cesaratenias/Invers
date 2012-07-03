<?php
include '../../../conexion.php'; 
$id = $_GET['id'];
$sqlCc="SELECT p.*, pro.* FROM persona p INNER JOIN proveedor pro ON p.id=pro.id_persona WHERE p.id = $id;";
$sql= mysql_query($sqlCc);
?>