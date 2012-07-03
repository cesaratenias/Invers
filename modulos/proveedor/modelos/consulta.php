<?php
include '../../../conexion.php'; 
$id = $_GET['tra'];
$sqlCc="SELECT p.*, pro.* FROM persona p INNER JOIN proveedor pro WHERE id.p = $id;";
$sql= mysql_query($sqlCc);
?>