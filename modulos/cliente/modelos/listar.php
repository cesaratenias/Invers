<?php 
include '../../../conexion.php'; 
$sqlCl="SELECT * FROM persona WHERE tipo='1';";
$sql= mysql_query($sqlCl);
?>