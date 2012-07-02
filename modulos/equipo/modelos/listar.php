<?php 
include '../../../conexion.php'; 
$sqlEl="SELECT * FROM recurso WHERE tipo='2';";
$sql= mysql_query($sqlEl);
$resEl = mysql_fetch_array($sql);
?>
