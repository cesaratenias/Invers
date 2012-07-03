<?php
include '../../../conexion.php'; 
$id = $_GET['pro'];
$sqlCc="SELECT p.*, pro.* FROM persona p INNER JOIN proveedor pro WHERE id.p = $id;";
$sql= mysql_query($sqlCc);
$resProv = mysql_fetch_array($sql)
?>